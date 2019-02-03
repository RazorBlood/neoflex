<?php

namespace application\models;

use application\core\Db;

abstract class Model {

    public $db;

    public function __construct() {
        $this->db = new Db;
    }

}