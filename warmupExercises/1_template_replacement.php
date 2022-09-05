<?php

declare(strict_types=1);

/*
1. Pakeiskite šablone tarp dvigubų riestinių skliaustų esančius kintamuosius į $replacements masyve esančius duomenis
ir išspausdinkite gautą tekstą.
Jeigu kažkuris šablone esantis kintamasis lieka nepakeistas, išspausdinkite klaidos pranešimą: 'Missing replacement variables'.
Nebūtina naudoti objektinį programamvimą.

Kodo kvietimo pavyzdys:
replaceTemplate($replacements, $template);
Quick fox jumps over the lazy dog


replaceTemplate([], 'My name is {{name}}');
Missing replacement variables

2. Patobulinkite kodą, kad klaida grąžintų, kurių kintamųjų būtent trūksta

replaceTemplate([], 'My name is {{name}}. I am from {{from}}');
Missing replacement variables: name, from
*/

$template = 'A {{animal}}, which is a quick animal, jumps over the {{obstacle_type}} {{obstacle}}';
$replacements = [
    'animal' => 'fox',
    'obstacle' => 'dog',
    'obstacle_type' => 'lazy'
];

function replaceTemplate(string $template, array $variables): void
{
    echo '';
}

replaceTemplate($template, $replacements);

