<?php

namespace App\Libraries;

/**
 * App\Libraries\ApiResponse
 *
 * Helper class for API response
 * 
 * @package 
 * @version $Id$
 * @copyright Copyright (C) 2016 Js Lim. All rights reserved.
 * @author Js Lim <jslim89@gmail.com> 
 */
class ApiResponse {

    /**
     * HTTP status code
     * 
     * @var int
     */
    protected $_status;

    /**
     * HTTP status. E.g. 404, this value will be 'Not Found'
     * 
     * @var string
     */
    protected $_subject;

    /**
     * The message that want to show to user
     * 
     * @var string
     */
    protected $_message;

    /**
     * The actual data that user requested
     * 
     * @var mixed
     */
    protected $_data;

    /**
     * A look up table for HTTP status 
     */
    protected $HTTP_STATUS_CODE = [
        200 => 'OK',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found',
        500 => 'Internal Server Error',
    ];

    public function __construct() {
        $this->_status = 200;
        $this->_subject = $this->HTTP_STATUS_CODE[$this->_status];
        $this->_message = '';
    }

    /********* Setter **********/
    public function setStatus($status) {
        $this->_status = $status;
        if (empty($this->_subject) || in_array($this->_subject, $this->HTTP_STATUS_CODE)) $this->_subject = $this->HTTP_STATUS_CODE[$status];
    }

    public function setSubject($subject) {
        $this->_subject = $subject;
    }

    public function setMessage($message) {
        $this->_message = $message;
    }

    public function setResult($result) {
        $this->_data = $result;
    }

    /**
     * Return the response result
     * 
     * @return Illuminate\Http\JsonResponse
     */
    public function get() {
        return response()->json([
            'meta' => [
                'status' => $this->_status,
                'subject' => $this->_subject,
                'message' => $this->_message,
            ],
            'response' => empty($this->_data) ? (object)[] : $this->_arrayNullToEmpty($this->_data)
        ], $this->_status);
    }

    /**
     * If there are 'null' value, format it to empty string
     * 
     * @param array $json_array 
     * @return array
     */
    protected function _arrayNullToEmpty($json_array) {
        $new_json_array = array();
        foreach ($json_array as $k => $v) {
            if (is_array($v)) {
                $new_json_array[$k] = $this->_arrayNullToEmpty($v);
                continue;
            }
            if ($v === null) {
                $new_json_array[$k] = '';
                continue;
            }
            $new_json_array[$k] = $v;
        }
        return $new_json_array;
    }
}
