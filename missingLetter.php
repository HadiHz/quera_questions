<?php

function missingLetter($arr)
{
    $arrToAscii = [];
    foreach ($arr as $letter){
        $arrToAscii[] = ord($letter);
    }

    $missingLetterAscii = -1;
    foreach ($arrToAscii as $key => $ascii){
        if (($key+1) < count($arrToAscii)){
            if ($ascii + 1 != $arrToAscii[$key + 1]){
                $missingLetterAscii = $ascii + 1;
            }
        }
    }
    return $missingLetterAscii != -1 ? chr($missingLetterAscii) : '';
}
