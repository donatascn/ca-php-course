<?php

declare(strict_types=1);

/*
Parašykite įrankį slaptažodžio stiprumui nustatyti.
Slaptažodis turi:
- būti sudarytas iš ne mažiau 10 simblių
- turi turėti bent 2 skirtingus specialiuosius simbolius (!@#$%^&*_)
- turi turėti ir mažųjų, ir didžiųjų raidžių (aB)
- turi turėti bent vieną skaitmenį (0-9)

Slaptažodžio validavimas turi vykti klasėje PasswordValidator.
Validatorius, atradęs taisyklės pažeidimą, turi mesti exception'ą su žinute (pvz.: "Password must be at least ten symbols long")
Kodas, kviečiantis validatorių turi gaudyti exception'ą ir spausdinti žinutę terminale.
Jeigu slaptažodis atitinka reikalavimus, spausdinkite "Password is valid"

Failo kvietimo pavyzdys:
php -f 1_password_validator.php 123456
Password must be at least 10 symbols long

php -f 1_password_validator.php 123456abc!@
Password is valid

*/
