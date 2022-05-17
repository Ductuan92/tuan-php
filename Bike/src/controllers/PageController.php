<?php

namespace controllers;

use controllers\BaseController;

class PageController extends BaseController
{
    public function getPageInfo()
    {
        $this->render('/view/page/index');
    }
}

$obj = new PageController();
switch ($_REQUEST['action'])
{
    case 'pageInfo':
        $obj->getPageInfo();
        break;
}
