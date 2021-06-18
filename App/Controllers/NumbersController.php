<?php

class NumbersController
{
    protected PropertyContainerNumbersInterface $propertyContainerNumbers;

    public function __construct(PropertyContainerNumbersInterface $propertyContainerNumbers)
    {
        $this->propertyContainerNumbers = $propertyContainerNumbers;
    }

    public function create()
    {

    }

}