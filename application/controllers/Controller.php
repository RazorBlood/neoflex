<?php

namespace application\controllers;

use application\core\Db;

abstract class Controller {

    public $db;

    public function __construct() {
        $this->db = new Db;
    }

}