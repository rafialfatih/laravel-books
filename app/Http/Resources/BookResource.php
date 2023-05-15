<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'title' => $this->title,
            'cover' => $this->cover,
            'price' => $this->price,
            'genres' => $this->genres->implode('title', ', '),
            'authors' => $this->authors->implode('name', ', '),
            $this->mergeWhen($request->books, [
                'description' => $this->description
            ])
        ];
    }
}
