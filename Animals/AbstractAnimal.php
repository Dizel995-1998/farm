<?php

namespace Animals;

/**
 * Абстрактная сущность животного обитающего на ферме
 * Class Animal
 */
abstract class Animal
{
    /**
     * Возвращает количественное значение продукции произведённой животным в ходе его
     * естественной жизнедеятельности
     * @return int
     */
    abstract function getProducts() : int;

    /**
     * Возвращает тип произведённой животным продукции ( для возможности классификации продуктов на ферме )
     * @return string
     */
    abstract function getProductsType() : string;
}
