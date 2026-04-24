<?php

namespace App\Interfaces\Auth;

use App\DTO\Auth\LoginDTO;

interface AuthServiceInterface
{
  public function login(LoginDTO $dto): bool;
}