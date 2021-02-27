<?php

namespace Farm;

use Animals\Animal;
use Exception;

class Farm
{
    private array $repositoryOfAnimals = [];

    public function addAnimal(Animal $animal)
    {
        $this->repositoryOfAnimals[] = $animal;
    }

    public function executeCollectionProducts() : array
    {
        $arProducts = [];

        foreach ($this->repositoryOfAnimals as $animal) {
            $productType = $animal->getProductsType();
            $productQuantity = $animal->getProducts();
            $arProducts[$productType] += $productQuantity;
        }

        return $arProducts;
    }

    public function __construct(array $animals = [])
    {
        foreach ($animals as $animal) {
            if (!$animal instanceof Animal) {
                throw new Exception("Array animals must consist only instance of Animal class");
            }
        }

        $this->repositoryOfAnimals = $animals;
    }
}
