<?php

declare(strict_types=1);

namespace App\Transformer;

use App\Entity\Book;
use League\Fractal\TransformerAbstract;

final class BookTransformer extends TransformerAbstract
{
    public function transform(Book $book)
    {
        return [
            'id' => (int)$book->getId(),
            'title' => $book->getTitle(),
            'year' => $book->getYear(),
            'isbn' => $book->getIsbn()
        ];
    }
}