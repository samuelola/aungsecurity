<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RegisterInterface{

    public function addWallet($user_id);
    public function createUser($userRequest,$tenant);
}