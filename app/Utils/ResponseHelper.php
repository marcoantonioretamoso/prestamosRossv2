<?php

namespace App\Utils;

use Illuminate\Http\JsonResponse;

trait ResponseHelper
{
  protected function successResponse($data, $message = 'Request successful', $statusCode = 200): JsonResponse
  {
    return response()->json([
      'success' => true,
      'message' => $message,
      'data' => $data
    ], $statusCode);
  }

  protected function errorResponse($message = 'An error occurred', $statusCode = 500, $errors = null): JsonResponse
  {
    $response = [
      'success' => false,
      'message' => $message,
    ];

    if (!empty($errors)) {
      $response['errors'] = $errors;
    }

    return response()->json($response, $statusCode);
  }
}
