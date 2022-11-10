<?php

namespace App\Http\Controllers;

class ApiResponse {
    const FIELD_STATUS_CODE = "status_code";
    const FIELD_STATUS_MESSAGE = "status_message";
    const FIELD_RESULT = "result";

    const STATUS_CODE_SUCCESS                                      = 6000;
    const STATUS_CODE_ERROR_OTHER                                  = 7999;

    public static function createResponse($status, $message, $result)
    {
        return [
            static::FIELD_STATUS_CODE => $status,
            static::FIELD_STATUS_MESSAGE => $message,
            static::FIELD_RESULT => $result,
        ];
    }
    public static function success($status_message = "", $result = null) {
        return self::createResponse(self::STATUS_CODE_SUCCESS, $status_message, $result);
    }
    public static function error($status_message = null, $result = null) {
        if (! $status_message) {
            $status_message = "Failed To Get Data";
        }
        return self::createResponse(self::STATUS_CODE_ERROR_OTHER, $status_message, $result);
    }



}