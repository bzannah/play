<?php

declare(strict_types=1);

namespace App\Entity;

final class Book
{
    /** @var string */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $year;

    /** @var string */
    private $isbn;

    public function __construct(string $id, string $title, string $isbn, string $year)
    {
        $this->id = $id;
        $this->title = $title;
        $this->isbn = $isbn;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }

    public static function all(): array
    {
        return [
            new Book('1', 'TestBook1', '123', '2019'),
            new Book('2', 'TestBook2', '1234', '2020'),
            new Book('3', 'TestBook3', '12345', '2021'),
            new Book('4', 'TestBook4', '123456', '2022')
        ];
    }
}