<?php

namespace MyApp\services;

class Insurance implements service
{

    public function register()
    {
        echo "by the insurance at the office";
    }

    public function serve()
    {
        echo "show the insurance after get your services, everything will be free";
    }

    public function payment()
    {
        echo "pay the insurance at the office right after you register";
    }
}
