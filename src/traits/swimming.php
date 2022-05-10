<?php

namespace myApp\traits;

trait swimming
{
    private $status;
    public function __construct($status)
    {
        $this->status = $status;
    }
    public function getStatus()
    {
        echo $this->status;
    }
}
