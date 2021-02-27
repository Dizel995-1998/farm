<?php

use Animals\Chicken;
use Animals\Cow;
use Farm\Farm;

require_once 'vendor/autoload.php';

$arAnimals = [];

for ($i = 0; $i < 20; $i++) {
    $arAnimals[] = new Chicken();
}

for ($i = 0; $i < 10; $i++) {
    $arAnimals[] = new Cow();
}

echo 'В этом месяце фермер хорошо потрудился и собрал:' . PHP_EOL;

$farm = new Farm($arAnimals);
var_dump($farm->executeCollectionProducts());