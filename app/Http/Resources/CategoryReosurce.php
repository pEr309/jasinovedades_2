<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryReosurce extends JsonResource
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
            'name' => $this->name,
            'cant_Almc' => $this->cant_Almc,
            'user_id'=>$this->user_id,
            'product_id'=> $this->product_id,
            'created_at'=> $this->created_at,
            'updated_at'=>$this->updated_at
        ];
    }
}
