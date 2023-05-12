<?php
/**
 * AddressRequest.php
 * Project: ${PROJECT_NAME}
 * Author: ${USER}
 * 11/05/2023 11:40 am
 * Copyright Trevor van der Linden, IoT Systems Design Pty Ltd. All rights reserved.
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    public function rules()
    {
        return [
            'street' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'postcode' => ['required'],
            'country' => ['required'],
        ];
    }
}
