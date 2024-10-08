<?php

namespace App\Services\ContactUs;

use App\Repositories\ContactUs\ContactUsRepositoryInterface;
use App\Services\BaseService;

class ContactUsService extends BaseService implements ContactUsServiceInterface
{
    public $repository;

    public function __construct(ContactUsRepositoryInterface $contactUsRepository)
    {
        $this->repository = $contactUsRepository;
    }
}
