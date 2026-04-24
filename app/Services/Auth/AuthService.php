<?php

namespace App\Services\Auth;

use App\DTO\Auth\LoginDTO;
use App\Interfaces\Auth\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{
  public function login(LoginDTO $dto): bool
  {
    return Auth::attempt([
      'email' => $dto->email,
      'password' => $dto->password,
    ]);
  }
}