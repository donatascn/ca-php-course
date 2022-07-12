<?php

declare(strict_types=1);

/*
1. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.

1
2
3
...
*/

/*
2. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*
3. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi būti išspausdintas naujoje eilutėje.

1
3
5
...
*/

/*
4. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.
*/

/*
6. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/

/*
7. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];

/*
8. Skaičių konvertavimas į bool.
Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite kiekvieną skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę

-5
bool(true)
----------
-4
bool(true)
----------
...

Atkreipkite dėmesį, į ką pavirsta skaičius 0
*/

/*
9. Foreach'inkite per masyvą ir išspausdinkite jame esančias eilutes.
Jeigu iteracijos tekstas yra vienas iš: '/', '*' arba '()', jo nespausdinkite, teskite iteraciją.
Jeigu interacijos tekstas yra lygus '---', teksto nespausdinti, o ciklas turėtų nutrūkti.
Užduočiai atlikti naudokite 'continue' ir 'break'.

$items = [
    'Lazy',
    '/',
    'fox',
    'jumps',
    '*',
    'over',
    'the',
    '()',
    'lazy',
    'dog',
    '---',
    'this',
    'should',
    'not',
    'be',
    'printed',
    'or',
    'iterated',
];
*/

/*
10. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinta vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

/*
11. Pasinaudodami ciklais, išspausdinkite lentelę, kurioje nelyginiai skaičiai yra žvaigždutės.
Parašykite kodą taip, kad jis su menkais pakeitimais veiktų ir tuo atveju, jeigu reiktų spausdinti
ne iki 20, bet iki kito dviženklio skaičiaus (pvz. 90).

* |2 |* |4 |*
6 |* |8 |* |10
* |12|* |14|*
16|* |18|* |20
*/

/*

12. Pasinaudodami ciklais, išspausdinkite į terminalą šią figūrą.
*
**
***
****
*****
******
*******
******
*****
****
***
**
*

*/

/*
13. Išspausdinkite stačiakampį, kurio matmenys bus kinamųjų reikšmės.

$length = 5;
$height = 4;

*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*  *  *  *  *
*/

/*
14. Išspausdinkite skaičių nuo 1 iki x daliklius, mažesnius už patį skaičių.

1: 1
2: 1
3: 1
4: 1 2
5: 1
6: 1 2 3
7: 1
8: 1 2 4
9: 1 3
10: 1 2 5
11: 1
12: 1 2 3 4 6
...
 */

/*
15. Išspausdinkite šią struktūrą. Kiiekvienas skaičius yra dviejų virš jo esančių skaičių suma. Rašykite tokį kodą,
kuris leistų nesunkiai spausdinti daugiau eilučių
          1
        1   1
      1   2   1
    1   3   3   1
  1   4   6   4   1
1   5   10   10   5   1
...
*/
