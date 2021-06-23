<?php

namespace App\Interfaces;

interface PropertyContainerNumbersInterface
{

    public function create(string $value): void;

    public function read(int $id): string;

    public function update(int $id, string $value): string;

    public function delete(int $id): void;

}