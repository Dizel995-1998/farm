<?php

namespace Animals;

/**
 * Сущность коровы
 * Class Cow
 */
class Cow extends Animal
{
    /**
     * Возвращает кол-во литров молока за один надой ( 8 - 12 литров )
     * @return int
     */
    function getProducts(): int
    {
        return rand(8, 12);
    }

    /**
     * Возвращает тип продукции ( коровье молоко, яйца )
     * @return string
     */
    function getProductsType(): string
    {
        return 'cow_milk';
    }
}