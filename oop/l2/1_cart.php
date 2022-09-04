<?php

declare(strict_types=1);

/*
Sukurkite klasių hierarchiją, skirtą valdyti kliento prekių krepšelį.
Reikalingos klasės - Cart, CartItem, CartDiscount, Customer.

Customer metodai:
__construct(string $name, string $surname, string $level)
getFullName()
getLevel() - gali būti 'A', 'B' arba 'C'

CartItem metodai:
__construct(string $name, int $price, int $quantity)
getName() - prekės pavadinimas pvz.: 'Iphone 13'
getPrice() - prekė kaina pvz.: 1300 (naudokite int)
getQuantity() - prekės vienetų kiekis pvz.: 3 (naudokite int)

CartDiscount metodai:
__construct(int $percent, string $customerLevel)
getDiscountPercent() - nuolaidos procentas pvz.: 15
getCustomerLevel() - gali būti 'A', 'B' arba 'C'

Cart metodai:
__construct(Customer $customer)
addItem(CartItem $cartItem) - turi leisti pridėti CartItem objektą. Galite saugoti CartItem'us masyve.
addDiscount(CartDiscount $cartDiscount) - turi leisti pridėti CartDiscount objektus
getTotal() - turi grąžinti visą krepšelio sumą su pritaikytomis nuolaidomis.
    Suapvalinkite iki 2 skaičių po kablelio
    Skaičiuojant 'total' nuolaidos sumuojasi. Turi būti pritaikomos tik tos nuolaidos,
    kurių 'customerLevel' sutampa su krepšelio kliento leveliu.
    Pvz.: (6 * 25,90) *  (100 - (15 + 2)) / 100
printSummary() - turi isspausdinti krepselio santrauka

Kaip turėtų būti kviečiamas kodas:
$customer = new Customer('John', 'Smith', 'A');
$cart = new Cart($customer);
$iphone = new CartItem('Iphone 13', 1300, 1);
$airpods = new CartItem('Airpods Pro', 200, 2);
$cart->addItem($iphone);
$cart->addItem($airpods);

$cartDiscount1 = new CartDiscount(15, 'A');
$cart->addDiscount($cartDiscount1);
$cartDiscount2 = new CartDiscount(2, 'A');
$cart->addDiscount($cartDiscount2);
$cartDiscount3 = new CartDiscount(20, 'B');
$cart->addDiscount($cartDiscount2);

$total = $cart->getTotal();
var_dump($total); // 1249.5
$cart->printSummary();
Customer: John Smith
Customer level: A
Items:
* Iphone 13 - 1300 x 2 = 2600 eur
* Airpods Pro - 200 x 1 = 200 eur
Discount: 17% - 476 eur
Total: 2324 eur


1 dalis:
Susikurkite CartItem, CartDiscount ir Customer klases

2 dalis:
Pasirašykite klasę Cart. Pridėkite jai metodus __construct, addItem ir addDiscount

3 dalis:
Įgyvendinkite logiką getTotal() metodui

4 dalis:
Įgyvendinkite logiką printSummary() metodui
*/
