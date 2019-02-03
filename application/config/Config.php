<?php

namespace application\config;

use application\core\Controller;

class Config {

    /*CONNECT*/

    public $host = 'localhost';

    public $name = 'neoflex';

    public $user = 'root';

    public $password = '';

    /*TEMP*/

    public $view = __DIR__.'\..\views\\';

    public $css = __DIR__.'\..\..\css\\';

    public $js = __DIR__.'/../../js/';

}