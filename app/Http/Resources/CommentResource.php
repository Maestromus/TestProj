<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if (isset($this->post->image_id)) {
            return [
                'id' => $this->id,
                'post' => $this->post->users->is_active ? $this->post : null,
                'content' => $this->content,
                'deleted_at' => $this->deleted_at,
            ];
        }
    }
}
