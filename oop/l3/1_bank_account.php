<?php

declare(strict_types=1);

class BankAccount
{
    protected int $balance;

    public function __construct(int $balance)
    {
        if ($balance < 0) {
            $this->balance = 0;
            echo 'Balance cannot be less than 0';

            return;
        }
        $this->balance = $balance;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function spend(int $amount): void
    {
        if ($amount > $this->balance) {
            echo 'Cannot spend more than you have';

            return;
        }

        if ($amount <= 0) {
            echo 'Can only spend a positive amount';

            return;
        }

        $this->balance = $this->balance - $amount;
    }

    public function deposit(int $amount): void
    {
        $amount = $this->applyFees($amount);

        if ($amount > 0) {
            $this->balance = $this->balance + $amount;
        }
    }

    protected function applyFees(int $amount): int
    {
        return (int) round($amount - $amount * 0.01);
    }
}

/*
Sukurkite išvestines klases, kurios paveldėtų klasę BankAccount:
- klasė StudentAccount - Ši klasė turi netaikyti jokių mokesčių depozitams.

- klasė ChildAccount - Ši klasė neturi leisti per vieną kartą išleisti daugiau nei 10eur.

- klasė CreditAccount - Ši klasė turi leisti balansui nukristi iki -X sumos ($maxCreditAmount).
T.y. balansas gali buti neigiamas. $maxCreditAmount yra teigiama integer tipo reikšmė.
Jeigu $maxCreditAmount yra 100, tai reiškia, kad balansas negali kristi žemiau -100.
Ši suma ($maxCreditAmount) turi būti paduodama per konstruktorių.
Dėmesio - šiai užduočiai reiktų pakeisti BankAccount::balance savybės matomumą į protected -
tuomet galėsite naudoti šią savybę išvestinėse klasėse.

- klasė SavingsAccount. Ši klasė turi suteikti galimybę padidinti sąskaitos depozitą tam tikru procentu.
T.y. - ji gali turėti public metodą addInterest, kurį iškvietus su X procentu, depozitas padidėtų X procentų
Įsivaizduokite, kad šis metodas būtų kviečiamas kas metus ir sąskaita tokiu būdu augtų.
Dėmesio - šiai užduočiai reiktų pakeisti BankAccount::balance savybės matomumą į protected -
tuomet galėsite naudoti šią savybę išvestinėse klasėse.

*/