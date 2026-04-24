<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Auth\LoginDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Interfaces\Auth\AuthServiceInterface;
use App\Utils\ResponseHelper;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    use ResponseHelper;
    public function __construct(
        private AuthServiceInterface $authService
    ) {}

    public function login(LoginRequest $request): JsonResponse
    {
        $dto = LoginDTO::fromArray($request->validated());

        $isAuthenticated = $this->authService->login($dto);

        if (!$isAuthenticated) {
            return $this->errorResponse(
                'Credenciales incorrectas',
                401
            );
        }

        return $this->successResponse(
            auth()->user(),
            'Login exitoso'
        );
    }
}
