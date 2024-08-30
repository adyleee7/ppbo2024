<?php

class Author
{
    public string $name;
    public string $description;

    public function show($type): array
    {
        return [];
    }
}

class Book
{
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPages;
    public string $author;
    public string $publisher;

    public function showAll(): array
    {
        return [];
    }

    public function detail($ISBN): array
    {
        return [];
    }
}

class Publisher
{
    public string $name;
    public string $address;
    private string $phone;

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}