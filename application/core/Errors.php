<?php

namespace application\core;


class Errors
{
    /*
     * $var $msg string
     * @return json
     * */
    static public function getError($msg)
    {
        echo json_encode([
            'status'  => 'error',
            'message' => $msg
        ]);
    }
    /*
     * $var $msg string
     * @return json
     * */
    static public function getSuccess($msg)
    {
        echo json_encode([
            'status'  => 'Success',
            'message' => $msg
        ]);
    }
}