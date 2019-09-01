<?php
function stringToNum(string $str, string $allowedSeparators = ",.")
{
    $convertedStr = $str;
    foreach (str_split($allowedSeparators) as $separator) {
        $convertedStr = str_replace($separator, '.', $convertedStr);
    }
    if (!is_numeric($convertedStr)) {
        throw new ParseError('Cannot parse ' . $str . ' into number.');
    }
    return (float)$convertedStr;
}