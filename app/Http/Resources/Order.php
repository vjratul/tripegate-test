<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
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
            'order-id' =>$this->id,
            'user_is' =>$this->user->id,
            'user_country' => $this->user->country,
            'product_id' => $this->product->id,
            'product_price' => $this->product->price 
        ];
    }
}
