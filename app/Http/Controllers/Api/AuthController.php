<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('/v1')]
class AuthController extends Controller
{
    use ApiResponses;

    #[Get('/login')]
    public function login(): JsonResponse
    {
        return $this->ok('Login successful');
    }
}
