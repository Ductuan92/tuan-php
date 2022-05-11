<?php

namespace MyApp\services;

class HealthCheck implements service
{

    public function register()
    {
        echo "register online throw our website or at receptionist";
    }

    public function serve()
    {
        echo "follow the instruction to meet our doctors";
    }

    public function payment()
    {
        echo "make payments throw our website or at our accountant department";
    }
}
