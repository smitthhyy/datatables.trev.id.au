<?php
/**
 * AddressPolicy.php
 * Project: ${PROJECT_NAME}
 * Author: ${USER}
 * 11/05/2023 11:40 am
 * Copyright Trevor van der Linden, IoT Systems Design Pty Ltd. All rights reserved.
 */

namespace App\Policies;

use App\Models\Address;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {

    }

    public function view(User $user, Address $address)
    {
    }

    public function create(User $user)
    {
    }

    public function update(User $user, Address $address)
    {
    }

    public function delete(User $user, Address $address)
    {
    }

    public function restore(User $user, Address $address)
    {
    }

    public function forceDelete(User $user, Address $address)
    {
    }
}
