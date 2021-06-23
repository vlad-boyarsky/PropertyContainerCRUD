<?php

namespace App\Controllers;

use App\Interfaces\PropertyContainerNumbersInterface;

class NumbersController
{

    protected PropertyContainerNumbersInterface $propertyContainerNumbers;

    public function __construct(PropertyContainerNumbersInterface $propertyContainerNumbers)
    {
        $this->propertyContainerNumbers = $propertyContainerNumbers;
    }

    public function create($value): void
    {
        $this->propertyContainerNumbers->create($value);
    }

    public function read($id): string
    {
        return $this->propertyContainerNumbers->read($id);
    }

    public function update($id, $value): void
    {
        $this->propertyContainerNumbers->update($id, $value);
    }

    public function delete($id): void
    {
        $this->propertyContainerNumbers->delete($id);
    }

}