<?php

declare(strict_types=1);

/*
1. Pakeiskite šablone tarp dvigubų riestinių skliaustų esančius kintamuosius į $replacements masyve esančius duomenis
ir išspausdinkite gautą tekstą.
Turėtumėte išspausdinti: 'Quick fox jumps over the lazy dog'
Jeigu kažkuris šablone esantis kintamasis lieka nepakeistas, išspausdinkite klaidos pranešimą: 'Missing replacement variables'.
Nebūtina naudoti objektinį programamvimą.
*/

$template = 'Quick {{animal}} jumps over the {{obstacle_type}} {{obstacle}}{{sentence_end}}';
$replacements = [
    'animal' => 'fox',
    'obstacle' => 'dog',
    'obstacle_type' => 'lazy'
];
