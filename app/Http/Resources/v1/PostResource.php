<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // cambiar la apariencia en postman
        // return parent::toArray($request);
        return[
            'title'=>$this->title,
            'slug'=>$this->slug,
            'excerpt'=>$this->excerpt,
            'content'=>$this->content
        ];
    }
}