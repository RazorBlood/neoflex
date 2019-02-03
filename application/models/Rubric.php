<?php

namespace application\models;

class Rubric extends Model
{
    public function getRubrics()
    {
        return $this->db->row('SELECT * FROM rubrics');
    }
}