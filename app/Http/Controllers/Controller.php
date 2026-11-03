<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(title="Collab API", version="1.0.0")
 */
abstract class Controller
{
    /**
     * @OA\Get(
     *     path="/api/ping",
     *     summary="Test endpoint",
     *     @OA\Response(response=200, description="OK")
     * )
     */
    public function ping() {}
}