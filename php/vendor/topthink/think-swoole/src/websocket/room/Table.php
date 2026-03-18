<?php

namespace think\swoole\websocket\room;

use InvalidArgumentException;
use Swoole\Table as SwooleTable;
use think\swoole\contract\websocket\RoomInterface;

class Table implements RoomInterface
{
    /**
     * @var array
     */
    protected $config = [
        'room_rows'   => 8192,
        'room_size'   => 2048,
        'client_rows' => 4096,
        'client_size' => 2048,
    ];

    /**
     * @var SwooleTable
     */
    protected $rooms;

    /**
     * @var SwooleTable
     */
    protected $fds;

    /**
     * TableRoom constructor.
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = array_merge($this->config, $config);
    }

    /**
     * Do some init stuffs before workers started.
     *
     * @return RoomInterface
     */
    public function prepare(): RoomInterface
    {
        $this->initRoomsTable();
        $this->initFdsTable();

        return $this;
    }

    /**
     * Add multiple socket fds to a room.
     *
     * @param string fd
     * @param array|string $roomNames
     */
    public function add($fd, $roomNames)
    {
        $rooms     = $this->getRooms($fd);
        $roomNames = is_array($roomNames) ? $roomNames : [$roomNames];

        foreach ($roomNames as $room) {
            $fds = $this->getClients($room);

            if (in_array($fd, $fds)) {
                continue;
            }

            $fds[]   = $fd;
            $rooms[] = $room;

            $this->setClients($room, $fds);
        }

        $this->setRooms($fd, $rooms);
    }

    /**
     * Delete multiple socket fds from a room.
     *
     * @param string fd
     * @param array|string $roomNames
     */
    public function delete($fd, $roomNames = [])
    {
        $allRooms  = $this->getRooms($fd);
        $roomNames = is_array($roomNames) ? $roomNames : [$roomNames];
        $rooms     = count($roomNames) ? $roomNames : $allRooms;

        $removeRooms = [];
        foreach ($rooms as $room) {
            $fds = $this->getClients($room);

            if (!in_array($fd, $fds)) {
                continue;
            }

            $this->setClients($room, array_values(array_diff($fds, [$fd])));
            $removeRooms[] = $room;
        }

        $this->setRooms($fd, collect($allRooms)->diff($removeRooms)->values()->toArray());
    }

    /**
     * Get all sockets by a room key.
     *
     * @param string room
     *
     * @return array
     */
    public function getClients(string $room)
    {
        return $this->getValue($room, RoomInterface::ROOMS_KEY) ?? [];
    }

    /**
     * Get all rooms by a fd.
     *
     * @param string fd
     *
     * @return array
     */
    public function getRooms($fd)
    {
        return $this->getValue($fd, RoomInterface::DESCRIPTORS_KEY) ?? [];
    }

    /**
     * @param string $room
     * @param array $fds
     *
     * @return $this
     */
    protected function setClients(string $room, array $fds)
    {
        return $this->setValue($room, $fds, RoomInterface::ROOMS_KEY);
    }

    /**
     * @param string $fd
     * @param array $rooms
     *
     * @return $this
     */
    protected function setRooms($fd, array $rooms)
    {
        return $this->setValue($fd, $rooms, RoomInterface::DESCRIPTORS_KEY);
    }

    /**
     * Init rooms table
     */
    protected function initRoomsTable(): void
    {
        $this->rooms = new SwooleTable($this->config['room_rows']);
        $this->rooms->column('value', SwooleTable::TYPE_STRING, $this->config['room_size']);
        $this->rooms->create();
    }

    /**
     * Init descriptors table
     */
    protected function initFdsTable()
    {
        $this->fds = new SwooleTable($this->config['client_rows']);
        $this->fds->column('value', SwooleTable::TYPE_STRING, $this->config['client_size']);
        $this->fds->create();
    }

    /**
     * Set value to table
     *
     * @param        $key
     * @param array $value
     * @param string $table
     *
     * @return $this
     */
    public function setValue($key, array $value, string $table)
    {
        $this->checkTable($table);

        if (empty($value)) {
            $this->$table->del($key);
        } else {
            $this->$table->set($key, ['value' => json_encode($value)]);
        }

        return $this;
    }

    /**
     * Get value from table
     *
     * @param string $key
     * @param string $table
     *
     * @return array|mixed
     */
    public function getValue(string $key, string $table)
    {
        $this->checkTable($table);

        $value = $this->$table->get($key);

        return $value ? json_decode($value['value'], true) : [];
    }

    /**
     * Check table for exists
     *
     * @param string $table
     */
    protected function checkTable(string $table)
    {
        if (!property_exists($this, $table) || !$this->$table instanceof SwooleTable) {
            throw new InvalidArgumentException("Invalid table name: `{$table}`.");
        }
    }
}
