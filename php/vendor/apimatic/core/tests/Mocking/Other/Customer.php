<?php

namespace Core\Tests\Mocking\Other;

use Core\Utils\CoreHelper;

class Customer extends Person
{
    /**
     * @var string
     */
    public $email;

    public function __toString(): string
    {
        return CoreHelper::stringify('Customer', ['email' => $this->email], parent::__toString());
    }
}
