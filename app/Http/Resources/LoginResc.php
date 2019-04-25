<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResc extends JsonResource
{
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => $this->id,
            'username' => $this->username,
            'mobile' => $this->mobile,
            'email' => $this->email
        ];
    }
}
