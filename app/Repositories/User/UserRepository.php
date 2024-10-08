<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }

    public function countUsers()
    {
        return $this->model->count();
    }


}