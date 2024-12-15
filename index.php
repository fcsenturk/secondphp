<?php

$musics = ["Pop", "Rock", "Rap", "Caz", "Metal", "Klasik", "Elektronik", "Slow", "Blues", "Country", NULL];
function myFunction($array, $value)
{
    $filteredArray = array_filter($array);
    $randomizedArray = array_rand($filteredArray, $value);
    $result = array_map(function ($item) use ($filteredArray) {
        return $filteredArray[$item];
    }, $randomizedArray);
    return $result;
}

echo "<pre>";

print_r(myFunction($musics, 2));
print_r(myFunction($musics, 3));
print_r(myFunction($musics, 2));
print_r(myFunction($musics, 4));
print_r(myFunction($musics, 5));
print_r(myFunction($musics, 6));


?>