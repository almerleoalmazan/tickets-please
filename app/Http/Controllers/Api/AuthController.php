<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiLoginRequest;
use App\Traits\ApiResponses;
use Illuminate\Http\JsonResponse;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Prefix;

#[Prefix('/v1')]
class AuthController extends Controller
{
    use ApiResponses;

    #[Post('/login')]
    public function login(ApiLoginRequest $request): JsonResponse
    {
        return $this->ok($request->get('email'));
    }

    #[Post('/register')]
    public function register(): JsonResponse
    {
        return $this->ok('register');
    }
}
