<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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

            'id'=>$this->id,
            "uuid" => $this->uuid,
            "description" => $this->description,
            "directory" => $this->directory,
            "duration" => $this->duration,
            "filename" =>$this->filename,
            "full_path" => $this->full_path,
            "is_public" => $this->is_public,
            "size" => $this->size,
            "status" =>$this->status,
            "thumbnail_full_path" => $this->thumbnail_full_path,
            "user_id" =>$this->user_id,
            "user_name" =>$this->user->full_name,
            "user_avatar" =>$this->user->avatar,
            "created_at" => $this->created_at->format('Y-m-d H:i:s'),
            "total_likes" => $this->total_likes,
            "likes" => $this->likes->implode('user_id',','),
            "total_views" => $this->total_views,

        ];
    }
}
