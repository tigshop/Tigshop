<?php

namespace Core\Tests\Mocking\Other;

use Core\Utils\CoreHelper;

class Order
{
    /**
     * @var int
     */
    public $orderId;

    /**
     * @var Customer
     */
    public $sender;

    /**
     * @var Order[]
     */
    public $similarOrders;

    /**
     * @var float
     */
    public $total;

    /**
     * @var bool
     */
    public $delivered;

    public function __toString(): string
    {
        return CoreHelper::stringify(
            'Order',
            [
                'orderId' => $this->orderId,
                'sender' => $this->sender,
                'similarOrders' => $this->similarOrders,
                'total' => $this->total,
                'delivered' => $this->delivered
            ]
        );
    }
}
