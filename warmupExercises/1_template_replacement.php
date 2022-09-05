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
*/

$template = 'Quick {{animal}} jumps over the {{obstacle_type}} {{obstacle}} {{tesntrestnirsti}}';
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
