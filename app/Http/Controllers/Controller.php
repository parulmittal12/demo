<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendSuccessAPIResponse($data, $statusCode = Response::HTTP_OK) {
        return response()->json([
            'error' => false,
            'data' => $data
        ], $statusCode);
    }

    protected function sendErrorAPIResponse(string $errorMsg, $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR) {
        return response()->json([
            'error' => true,
            'errorMsg' => $errorMsg
        ], $statusCode);
    }
}
