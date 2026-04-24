<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Customer\CustomerIndexDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerIndexRequest;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\Inertia;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerService $customerService) {
        $this->customerService = $customerService;
    }
    public function index(CustomerIndexRequest $request): Response
    {
        $dto = CustomerIndexDTO::fromArray($request->validated());

        $customers = $this->customerService->getAllCustomers($dto);
        return Inertia::render('Admin/Customer/Customer', [
            'customers' => $customers
        ]);
    }
}
