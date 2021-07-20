<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
                'type' => 'Students',
                'attributes' => [
                    'name' => $this->name,
                    'batch' => $this->batch,
                    // 'courses' => $this->course,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at
                ]
        ];
    }
}
