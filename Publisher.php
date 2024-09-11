<?php


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
