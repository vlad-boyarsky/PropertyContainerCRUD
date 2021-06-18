<?php

interface PropertyContainerNumbersInterface
{
    public function create(string $value): void;

    public function read(int $id): array;

    public function update(int $id, string $value): string;

    public function delete(int $id): void;

}