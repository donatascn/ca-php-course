<?php

declare(strict_types=1);

/*
Exercise 1

Parašykite PHP scriptą, kuris leistų modifikuoti tr. priemonių "duomenų bazę" (vehicles_database.json).
Galite naudoti tą patį failą, su kuriuo dirbote užduotyse 5-7.
Operacijos, kurias mes norime atlikti su duomenimis:
- pridėti tr. priemonę į DB
- išspausdinti visas transporto priemones esančias duomenų bazėje (DB)
- išspausdinti vieną tr. priemonę, esančią DB, pagal jos ID
- ištrinti vieną tr. priemonę, esančią DB, pagal jos ID

CRUD - Create, Read, Update, Delete

######################################################################################

1.1 Sukurkite priemonės pridėjimo funkcionalumą.
Žingsniai:
- paimti is failo duomenis
- juos decodinti
- tuomet pridėti savo suvestą tr. priemonę
- vėl encodinti ir išsaugoti faile
php -f vehicles.php add

Add new vehicle
Vehicle name: Audi 80
Vehicle type: passenger car
Vehicle weight: 1290

Vehicle saved!

######################################################################################

1.2 Sukurkite visų tr. priemonių išvedimą. 
php -f vehicles.php list

Vehicle list:
--------
id: 1
type: passenger car
name: Honda Civic
weight: 1550
--------
id: 2
type: airplane
name: Boeing 737
weight: 41410
--------
....

######################################################################################

1.3 Sukurkite vienos tr. priemonės išvedimą.
ID - yra masyvo nario raktas
Pvz: čia ID yra 0
Array
(
    [0] => Array
        (
            [type] => passenger car
            [name] => Honda Civic
            [weight] => 1550
        )
)

php -f vehicles.php show_one

Please enter ID of the vehicle:

#################

Pavyzdys #1:
php -f vehicles.php show_one

Please enter ID of the vehicle: 1

id: 1
type: passenger car
name: Honda Civic
weight: 1550

#################

Pavyzdys #2:
php -f vehicles.php show_one

Please enter ID of the vehicle: 999

Vehicle 999 does not exist!

######################################################################################

1.4 Sukurkite vienos tr. priemonės ištrynimą. 
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete:

#################

Pavyzdys #1:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 1

Vehicle 1 deleted!

#################

Pavyzdys #2:
php -f vehicles.php delete_one

Please enter ID of the vehicle to delete: 999

Vehicle 999 does not exist!

*/