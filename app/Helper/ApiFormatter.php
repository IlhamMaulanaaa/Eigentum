<?php

namespace App\Helper;

class ApiFormatter{
    protected static $response = [
        'code' =>  null,
        'message' =>  null,
        'data' => null
    ];

    public static function createApi($code, $message, $data){
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['data'] = $data;

        return response()->json(self::$response, self::$response['code']);
    }

    public static function view($view, $data){
        return view($view, $data);
    }
    public static function redirect($view){
        return redirect($view);
    }



}
