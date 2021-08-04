<?php

class ResponseUtils
{
    public static function result($success = true, $error_code = 200, $message = "", $data = [])
    {
        return json_encode(
            [
                "isBase64Encoded" => "false",
                "statusCode" => "200",
                "headers" => [
                    "Access-Control-Allow-Origin" => "*",
                    "Access-Control-Allow-Credentials" => true,
                    "Access-Control-Allow-Headers" =>
                    "X-Requested-With,content-type,auth-token,X-Log-Id",
                    "Access-Control-Allow-Methods" =>
                    "GET,POST,PUT,DELETE,HEAD,OPTIONS,PATCH",
                    "Access-Control-Max-Age" => 600
                ],
                "body" => [
                    "success" => $success,
                    "error_code" => $error_code,
                    "message" => $message,
                    "data" => $data
                ]
            ]
        );
    }
}
