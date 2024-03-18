<?php

function sayHello(array $words, int $reverseIndex): void
{
    $word = $words[$reverseIndex];
    $word = strrev($word);
    $words[$reverseIndex] = $word;
    echo implode(' ', $words) . "\n";
}
