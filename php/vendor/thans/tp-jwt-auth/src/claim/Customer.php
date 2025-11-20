<?php


namespace thans\jwt\claim;

class Customer extends Claim
{
    public function __construct($name, $value)
    {
        parent::__construct($value);
        $this->setName($name);
    }
}
