<?php

namespace App\DTO\Customer;

use App\Models\Customer;
use Illuminate\Support\Collection;

class CustomerDTO
{
  public function __construct(
    public int $id,
    public string $name,
    public string $email,
    public string $created_at
  ) {}

  public static function fromModel(Customer $customer): self
  {
    return new self(
      $customer->id,
      $customer->name,
      $customer->email,
      $customer->created_at->format('Y-m-d')
    );
  }

  public static function collection($customers): Collection
  {
    return $customers->map(fn($c) => self::fromModel($c));
  }
}
