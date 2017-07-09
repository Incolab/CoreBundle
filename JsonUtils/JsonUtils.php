<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Incolab\CoreBundle\JsonUtils;

use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of JsonResponse
 *
 * @author david salbei
 */
class JsonUtils {

    private $jsonResponse;

    public function __construct() {
        $this->jsonResponse = new JsonResponse();
    }

    public function sendJson($status, $data, $auth = 0) {

        $completeData = [
            'o' => $auth,
            'status' => $status,
            'data' => $data,
            'request_time' => 0.0
        ];

        switch ($status) {
            case 400:
                $this->jsonResponse->setStatusCode($status);
            case 401:
                $this->jsonResponse->setStatusCode($status);
                break;
            case 404:
                $this->jsonResponse->setStatusCode($status);
                break;
            default :
                $this->jsonResponse->setStatusCode(200);
        }

        return $this->jsonResponse->setData($completeData);
    }

}
