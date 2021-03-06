<?php

namespace App\Factories;

use App\Interfaces\FactoryInterface;
use App\Repositories\Api\UserApiRepository;

class UserFactory implements FactoryInterface
{

	static public function createApi() {
        return new UserApiRepository();
    }

}