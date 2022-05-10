<?php

namespace myApp\pet;

class dog extends animal implements insurance
{

    public function setName($name)
    {
        // TODO: Implement setName() method.
        $name = "free insurance";
    }

    public function issue($issue)
    {
        // TODO: Implement issue() method.
        $issue = "headache";
    }
}
