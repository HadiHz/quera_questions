<?php
function getTranslation($translations, $lang, $statement)
{
    return isset($translations[$lang][$statement]) ? $translations[$lang][$statement] : $statement;
}