
<?php

/*
An array in PHP is actually an ordered map. A map is a type that associates values to keys. 
This type is optimized for several different uses; it can be treated as an array, list (vector), 
hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more.

*/


$list = array ("id"=>1, 2, 3, 4, 5, 6, 7, 8, 9, "limit"=>10);
$countries = ["Ghana", "Berlin", "London", "Paris", "New York", "Tokyo", "Beijing", "Sydney", "Cape Town", "Lagos"];

echo $list[0]; // 1

echo $list["id"]; // 1

echo $list[1]; // 2

echo $countries[0]; // Ghana

echo $countries[1]; // Berlin

echo $countries[2]; // London


// for and foreach loops

for ($i = 0; $i < count($countries); $i++) {
    echo $countries[$i];
};

foreach ($countries as $i => $country) {
    echo "$i: $country\n";
}


// alternative syntax for control structures with foreach
/* <li><?= $city ?></li> */
$cities = ["Paris", "New York", "Tokyo", "Beijing", "Sydney", "Lagos"];

foreach($cities as $i => $city): ?>

<li>
    <article>
        <h1> <?php echo $i ?>: <?php echo $city ?></h1>
    </article>


</li>

<?php endforeach; ?>






