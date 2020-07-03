<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Memo extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' =>$this->id,
            'from'=>$this->from,
            'ref'=>$this->ref,
            'title'=>$this->title,
            'body'=>$this->body
        ];
    }
}
