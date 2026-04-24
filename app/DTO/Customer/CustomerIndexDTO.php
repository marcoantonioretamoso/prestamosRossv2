<?php

namespace App\DTO\Customer;

class CustomerIndexDTO
{
  public function __construct(
    public int $page = 1,
    public ?string $search = null
  ) {}

  public static function fromArray(array $data): self
  {
    return new self(
      page: $data['page'] ?? 1,
      search: $data['search'] ?? null
    );
  }
}