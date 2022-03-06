<?php
declare(strict_types=1);

function exercise1(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [0, 1, 2, 3, 4];
    
    return 0;
}

function exercise2(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];

    return 0;
}

function exercise3(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */
    
    $numbers = [
        [0, 1],
        [1, 0, 2],
        [
            0,
            [
                0, 1, 99
            ],
        ],
    ];
    
    return 0;
}

function exercise4(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_2' => [
                'zero' => 0, 'one' => 1, 'ninetynine' => 99
            ],
        ],
    ];
    
    return 0;
}


function exercise5(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                'zero' => 0, 'one' => 1, 99
            ],
        ],
    ];

    return 0;
}

function exercise6(): int
{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

    $numbers = [
        'first' => [0, 1],
        'third' => [1, 0, 2],
        'fourth' => [
            'value_1' => 0,
            'value_6' => [
                5 => 0, 'one' => 1, 99
            ],
        ],
    ];
    
    return 0;
}

function exercise7(): array
{
    /*
    Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
    */

    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
   
    return [];
}

function exercise8(): array
{
    /*
    Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
    Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'four' => 4, 'five' => 5]
    */

    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];

    return [];
}

function exercise9(int $start, int $end): void
{
    /*
    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
    */
    
}

function exercise10(int $number): void
{
    /*
    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
    funkcija nieko nespausdina.

    Funkcijos kvietimas: exercise10(60)
    Funkcija spausdina:
    3
    6
    9
    12
    ...
    60
    */
}

function exercise11(int $number): void
{
    /*
    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
    funkcija nieko nespausdina.

    Funkcijos kvietimas: exercise11(21)
    Funkcija spausdina:
    21
    20
    19
    ...
    1
    0
    */
}

function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}
/*
Kiekviena užduoties dalis turi būti funkcija. Tęskite funkcijų numeraciją: exercise12, exercise13 ir t.t.

Masyvą gausite iškvietę funkciją 'getNumbers'

12. Raskite ir grąžinkite visų masyvo narių sumą
13. Raskite ir grąžinkite lyginių masyvo narių sumą
14. Raskite ir grąžinkite teigiamų masyvo narių sumą
15. Raskite ir grąžinkite sandaugą tų masyvo narių, kurie dalijasi iš 5
16. Raskite ir grąžinkite masyvo narių vidurkį. Neigiamus skaičius paverskite į teigiamus
17. Į masyvą pridėkite naują narį - skaičiu 255 - ir išspausdinkite masyva pasinaudodami funkcija 'printr'
*/



