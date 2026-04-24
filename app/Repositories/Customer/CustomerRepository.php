<?php

namespace App\Repositories\Customer;

use App\DTO\Customer\CustomerIndexDTO;
use App\Models\Customer;

class CustomerRepository
{
    public function __construct()
    {
        //
    }
    public function allActive(CustomerIndexDTO $dto)
    {
        return Customer::query()
            ->where('active', true)
            ->when($dto->search, function ($query) use ($dto) {
                $query->where('name', 'like', "%{$dto->search}%")
                    ->orWhere('email', 'like', "%{$dto->search}%");
            })
            ->latest()
            ->paginate(10, ['*'], 'page', $dto->page);
    }
}
