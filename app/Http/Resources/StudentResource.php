<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\GradeResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'email' => $this->email,
            'dateOfBirth' => $this->date_of_birth,
            'address' => $this->address,
            'phoneNumber' => $this->phone_number,
            'gender' => $this->gender,
            'country' => $this->country,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'grades' => GradeResource::collection($this->whenLoaded('grades'))
        ];
    }
}
