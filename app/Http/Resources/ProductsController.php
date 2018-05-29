<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsController extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'title' => 'required|unique:post|max:255',
            'body' => 'required',
        ]);
    }
}
