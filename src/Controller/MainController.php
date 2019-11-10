<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Book;
use App\Transformer\BookTransformer;
use League\Fractal\Resource\Collection;
use Symfony\Component\Routing\Annotation\Route;

final class MainController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepageAction(): void
    {
        $books = Book::all();


//        $resource = new Collection($books, function (Book $book) {
//            return [
//                'id' => (int)$book->getId(),
//                'title' => $book->getTitle(),
//                'year' => $book->getYear(),
//                'isbn' => $book->getIsbn()
//            ];
//        });

        $resource = new Collection($books, new BookTransformer);


        dd($resource->getData());
    }
}