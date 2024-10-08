<?php

namespace App\Repositories\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Repositories\BaseRepository;

class ContactUsRepository extends BaseRepository implements ContactUsRepositoryInterface
{

    public function getModel()
    {
       return ContactUs::class;
    }
}
