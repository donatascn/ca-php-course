<?php

declare(strict_types=1);

/*
1.1 Susikurkite naują tuščią katalogą ir atsidarykite jį per kodo editorių.
Išskaidykite praeitos temos "inventory checker" užduotį (https://github.com/donatascn/vigi-intro/blob/main/oop/l1/2_inventory_checker.php)
į atskirus failus pagal skaidrėse nurodytą failų struktūrą.

Programa turėtų būti paleidžiama iš root katalogo:
php -f exercise1.php "1:3,2:2,5:1"

Klasės turėtų gulėt "src" kataloge:
Exception'ai turi gulėti "src/Exception" kataloge.
Kitos klasės turi gulėti "src/Service" kataloge.

Klasėms įtraukti į index.php naudokite paprastą "require"

1.2 Pridėkite namespace'sus visoms projekto klasėms

1.3 Sutvarkykite projekto autoload'inimą, pasinaudodami "spl_autoload_register" funkcija.
Programa turėtų veikti be papildomų require statementų - už visų failų įtraukimą į index.php failą turi
būti atsakingas autoloaderis

1.4 Panaudokite "use" statementus, kad nereiktų rašyti pilnai kvalifikuotų klasių pavadinimų (FQCN)
*/
