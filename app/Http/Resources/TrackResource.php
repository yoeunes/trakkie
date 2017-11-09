<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TrackResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'track' => $this->track,
            'album_id' => $this->album_id,
        ];
    }
}
