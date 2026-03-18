<?php

namespace think\swoole\websocket\socketio;

/**
 * Class Packet
 */
class Packet
{
    /**
     * Socket.io packet type `connect`.
     */
    const CONNECT = 0;

    /**
     * Socket.io packet type `disconnect`.
     */
    const DISCONNECT = 1;

    /**
     * Socket.io packet type `event`.
     */
    const EVENT = 2;

    /**
     * Socket.io packet type `ack`.
     */
    const ACK = 3;

    /**
     * Socket.io packet type `connect_error`.
     */
    const CONNECT_ERROR = 4;

    /**
     * Socket.io packet type 'binary event'
     */
    const BINARY_EVENT = 5;

    /**
     * Socket.io packet type `binary ack`. For acks with binary arguments.
     */
    const BINARY_ACK = 6;

    public $type;
    public $nsp  = '/';
    public $data = null;
    public $id   = null;

    public function __construct(int $type)
    {
        $this->type = $type;
    }

    public static function create($type, array $decoded = [])
    {
        $new     = new static($type);
        $new->id = $decoded['id'] ?? null;
        if (isset($decoded['nsp'])) {
            $new->nsp = $decoded['nsp'] ?: '/';
        } else {
            $new->nsp = '/';
        }
        $new->data = $decoded['data'] ?? null;
        return $new;
    }

    public function toString()
    {
        $str = '' . $this->type;
        if ($this->nsp && '/' !== $this->nsp) {
            $str .= $this->nsp . ',';
        }

        if ($this->id !== null) {
            $str .= $this->id;
        }

        if (null !== $this->data) {
            $str .= json_encode($this->data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }
        return $str;
    }

    public static function fromString(string $str)
    {
        $i = 0;

        $packet = new Packet((int) substr($str, 0, 1));

        // look up namespace (if any)
        if ('/' === substr($str, $i + 1, 1)) {
            $nsp = '';
            while (++$i) {
                $c = substr($str, $i, 1);
                if (',' === $c) {
                    break;
                }
                $nsp .= $c;
                if ($i === strlen($str)) {
                    break;
                }
            }
            $packet->nsp = $nsp;
        } else {
            $packet->nsp = '/';
        }

        // look up id
        $next = substr($str, $i + 1, 1);
        if ('' !== $next && is_numeric($next)) {
            $id = '';
            while (++$i) {
                $c = substr($str, $i, 1);
                if (null == $c || !is_numeric($c)) {
                    --$i;
                    break;
                }
                $id .= substr($str, $i, 1);
                if ($i === strlen($str)) {
                    break;
                }
            }
            $packet->id = intval($id);
        }

        // look up json data
        if (substr($str, ++$i, 1)) {
            $packet->data = json_decode(substr($str, $i), true);
        }

        return $packet;
    }
}
