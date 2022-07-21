<?php

declare(strict_types=1);

function exercise1(): array
{
    $products = [
        'item_1' => 'desk',
        'item_2' => 'lamp',
        'item_3' => 'error',
        'item_4' => 'sofa',
        'item_5' => 'error',
    ];

    /*
    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $products masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
    */

    return [];
}

function exercise2(int $id)
{
    $prefix = 'product';

    $products = [
        'product_1' => 'desk',
        'product_2' => 'lamp',
        'product_3' => 'sofa',
    ];

    /*
    Sunaikinkitę visas masyve esančias reikšmes, kurių raktai yra $prefix + $id. Grąžinkite pamodifikuotą masyvą.
    Jeigu tokio rakto nėra, gražinkite null.
    Pridėkite trūkstamą return tipą.
    Funkcijos kvietimas: exercise2(1)
    */

    return [];
}

function exercise3(): array
{
    $transactions = [
        [
            'total' => 200,
            'status' => 'error',
        ],
        [
            'total' => 150,
            'status' => 'completed',
        ],
    ];

    /*
    Sunaikinkite visus elementus, kurių 'status' reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
    Tikėkitės, kad $transactions masyvo narių skaičius gali varijuoti, tad naudokite ciklą.
    */

    return [];
}

function exercise4(string $key)
{
    $products = [
        'product_1' => 'shirt',
        'product_2' => 'trousers',
        'product_98' => 'coat',
    ];
    /*
    Funkcija turi grąžinti reikšmę pagal paduotą raktą.
    Jeigu paduotas raktas neegzistuoja $products masyve, grąžinkite null.
    Pridėkite teisingą return tipą.
    Funkcijos kvietimas: exercise4('product_2')
    */
}

// Žr. kitą užduotį
function getProducts(): array
{
    return [
        'chair' => [
            'type' => 'furniture',
            'name' => 'Best chair',
            'price' => 15,
        ],
        'lamp' => [
            'type' => 'lighting',
            'name' => 'Ultimate lamp',
            'price' => 99,
        ],
        'sofa' => [
            'type' => 'furniture',
            'name' => 'Soft sofa',
            'price' => 350
        ],
    ];
}

function exercise5(): array
{
    $products = getProducts();
    $fridge = [
        'type' => 'appliance',
        'name' => 'Coolest fridge',
        'price' => 200,
    ];
    /*
    Į masyvą $products pridėkite naują narį ir grąžinkite naujajį masyvą. Nario 'key' - 'fridge'.
    Nario reikšmė - $fridge
    */

    return [];
}

function exercise6(): int
{
    $products = getProducts();
    /*
    Raskite ir grąžinkite visų produktų kainų vidurkį
    */

    return 0;
}

function exercise7(): array
{
    $products = getProducts();
    /*
    Sudėkite visų produktų pavadinimus į masyvą ir jį grąžinkite
    [
        'Best chair',
        'Ultimate lamp',
        'Soft sofa',
    ]
    */

    return [];
}

function exercise8(): void
{
    $products = getProducts();
    /*
    Iteruodami per masyvą išspausdinkite eilutę, kurioje matytusi produkto pavadinimas ir tipas atskirti brūkšneliu:
    Best chair - furniture, Ultimate lamp - lighting, Soft sofa - furniture
    */

}

function exercise9(): array
{
    $transactions = [
        [
            'count' => 2,
            'price' => 13,
        ],
        [
            'count' => 15,
            'price' => 14,
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą ir pridėkite į
    transakciją su raktu 'total'. Grąžinkite $transactions iš funkcijos.
    Tikėkitės, kad transakcijų skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.

    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price' => 13,
            'total' => 26,
        ],
        ...
    ];
    */

    return [];
}

function exercise10(array $collection): array
{
    /*
    Funkcijai paduodama produktų masyvas:
    $productCollection = [
        [
            'name' => 'Best sofa',
            'price' => '55,
        ],
        ...
    ];
    exercise7($productCollection);

    Funkcija turi grąžinti performuotą masyvą - 'name' turi tapti to masyvo elemento raktu:
    [
        'Best sofa' => [
            'price' => '55,
        ],
        ...
    ]
    Galite kurti naują masyvą arba modifikuoti esamą.
    */

    return [];
}

function exercise11(): array
{
    $products = [
        'desk',
        'lamp',
        'sofa',
        'error',
    ];

    /*
    Išskaidykite produktų pavadinimus į raides.
    Žodžio skaidymui į raides naudokite funkciją https://www.php.net/manual/en/function.str-split.php
    [
        'desk' => [
            'd',
            'e',
            's',
            'k',
        ],
        ...
    ]
    */

    return [];
}

function exercise12(): array
{
    $currencyRates = [
        'usd' => 1.13,
        'gbp' => 0.83,
    ];

    $transactions = [
        [
            'product_id' => 1555,
            'count' => 2,
            'price_eur' => 10
        ],
        [
            'product_id' => 985,
            'count' => 15,
            'price_eur' => 15
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą visomis valiutomis
    esančiomis kintamajame $currencyRates (taip pat ir bazine valiuta - eur) ir pridėkite į transakciją su raktu 'totals'.
    Apvalinkite dviejų skaitmenų po kablelio tikslumu.
    Formules:
    bazine valiuta: total = count * price_eur
    kita valiuta: total = count * price_eur * currency_rate
    Grąžinkite pamodifikuotą $transactions masyvą iš funkcijos.
    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
    Valiutų skaičius taip pat gali augti.

    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price_eur' => 10,
            'totals' => [
                'eur' => ...,
                'usd' => ...,
                'gbp' => ...,
            ],
        ],
        ...
    ];
    */

    return [];
}

function exercise13(): void
{
    $animals = [
        [
            'type' => 'water',
            'name' => 'shark',
        ],
        [
            'type' => 'land',
            'name' => 'chimp',
        ],
        [
            'type' => 'water',
            'name' => 'hippo',
        ],
        [
            'type' => 'water',
            'name' => 'crocodile',
        ],
        [
            'type' => 'land',
            'name' => 'cat',
        ],
        [
            'type' => 'land',
            'name' => 'dog',
        ],
    ];

    /*
    Išspausdinkite gyvūnus sugrupuotus pagal tipą.

    Rezultatas:
    land: chimp dog cat
    water: shark hippo crocodile
    */
}

/*
14. Parašykite programą, kuri su jumis žaistų kryžiukų nuliukų.
Expected input: php -f extra_task_tictac.php begin
   A  B  C
1 |   |   |   |
  ------------
2 |   |   |   |
  ------------
3 |   |   |   |
Expected input: php -f extra_task_tictac.php A1
   A  B  C
1 | X |   |   |
  -------------
2 |   | 0 |   |
  -------------
3 |   |   |   |
Expected input: php -f extra_task_tictac.php B1
   A  B  C
1 | X | X |   |
  -------------
2 |   | 0 |   |
  -------------
3 | 0 |   |   |
Expected input: php -f extra_task_tictac.php C1
   A  B  C
1 | X | X | X |
  -------------
2 |   | 0 |   |
  -------------
3 | 0 |   |   |
You won!
*/
