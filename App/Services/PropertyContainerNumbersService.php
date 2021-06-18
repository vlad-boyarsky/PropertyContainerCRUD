<?php


class PropertyContainerNumbersService implements PropertyContainerNumbersInterface
{

    protected array $numbers = [];

    public function create($value): void
    {
        $this->numbers[] = $value;
    }

    public function read($id): array
    {
        return $this->numbers[$id];
    }

    public function update($id, $value): string
    {
        return $this->numbers[$id] = $value;
    }

    public function delete($id): void
    {
        unset($this->numbers[$id]);
    }
}