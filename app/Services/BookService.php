<?php

namespace App\Services;

use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class BookService
{
    public function getAllBooks(): ResourceCollection
    {
        return BookResource::collection(
            Book::with(['authors', 'genres'])->get()
        );
    }

    public function getBook(int $id): BookResource
    {
        return new BookResource(
            Book::with(['authors', 'genres'])->findOrFail($id)
        );
    }
}