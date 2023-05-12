<?php
/**
 * AddressResource.php
 * Project: ${PROJECT_NAME}
 * Author: ${USER}
 * 11/05/2023 11:40 am
 * Copyright Trevor van der Linden, IoT Systems Design Pty Ltd. All rights reserved.
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Address */
class AddressResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'postcode' => $this->postcode,
            'country' => $this->country,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
