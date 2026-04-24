<?php

namespace App\Services;

use App\DTO\Customer\CustomerDTO;
use App\DTO\Customer\CustomerIndexDTO;
use App\Repositories\Customer\CustomerRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;

class CustomerService
{
    protected $customerRepository;
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAllCustomers(CustomerIndexDTO $dto): LengthAwarePaginator
    {
        $cacheKey = "customers.page.{$dto->page}.search." . ($dto->search ?? 'null');

        return Cache::remember($cacheKey, 60, function () use ($dto) {

            $customers = $this->customerRepository->allActive($dto);

            $customers->getCollection()->transform(function ($customer) {
                return CustomerDTO::fromModel($customer);
            });

            return $customers;
        });
    }
}
