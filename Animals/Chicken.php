<?php

namespace Animals;

/**
 * Сущность курицы
 * Class Chicken
 */
class Chicken extends Animal
{
    /**
     * Возвращает кол-во яиц за один насест ( 0 - 1 яиц )
     * @return int
     */
    function getProducts(): int
    {
        return rand(0, 1);
    }

    function getProductsType(): string
    {
        return 'chicken_egg';
    }
}