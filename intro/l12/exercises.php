<?php

declare(strict_types=1);

/*
Failų valdymo panelė.

1. Atvaizduokite formą, kuri leistų upload'inti .png ir .jpeg failus į serverį. Failų dydžio limitas - 1MB.
Uploadintas failas turi atsirasti ./data direktorijoje su unikaliu pavadinimu.
Failo metaduomenys (failo pavadinimas, dydis, path'as, įkėlimo data) turėtų būti išsaugomi atskirame faile.

2. Pridėti puslapį, kuriame būtų atvaizduojami visi pauplodinti failai. Turėtų būti matoma:
- failo pavadinimas (kokį buvo priskyręs vartotojas)
- failo dydis
- įkėlimo data

Paspaudus ant tam tikro failo turėtų jį parsiųsti į vartotojo kompiuterį.

3. Prie kiekvieno failo pridėti mygtuką, kurį paspaudus, failas bus ištrintas iš ./data direktorijos, taip pat
iš failo, kuriame saugomi metaduomenys.
*/