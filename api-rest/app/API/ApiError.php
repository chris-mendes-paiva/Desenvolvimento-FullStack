<?php

namespace App\API;

class ApiError{

    public static function errorMessage($message, $code){

        return [
            'name' => $message,
            'code' => $code
        ];
    }
}