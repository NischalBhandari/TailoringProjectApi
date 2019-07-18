<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Clothes extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            'id' => $this->id,
            'name' => $this->name,
            'color' => $this->color,
            'texture' => $this->texture,
            'quality' => $this->quality,
            'price' => $this->quality,
            'material' => $this->material,
            'basePhoto' => $this->basePhoto,
        ];
    }
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://redshift.com')
        ];
    }
}
