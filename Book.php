<?php

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

