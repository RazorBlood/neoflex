<?php

namespace application\controllers;


use application\models\Rubric;

class RubricController
{
    public function getRubrics()
    {
        $result = Rubric::getRubrics();
        return $result;
    }
}