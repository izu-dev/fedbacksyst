<?php

$colors = ["green", "blue", "red", "yellow", "purple", "orange", "pink"];

$colors2 = [
    "g" => "I am thinking of another color",
    "b" => "Blue",
    "r" => "Red",
    "y" => "Yellow",
    "p" => "Purple",
    "o" => "Orange",
    "pi" => "Pink"
];

echo $colors2['g'];

foreach ($colors as $color) {
    echo "<h2 style='color: $color'>$color is a $color color</h2>";
}

echo "<hr>";
foreach ($colors2 as $color) {
    echo "<h2 style='color: $color'>$color is a $color color</h2>";
}
// for loop
// foreach loop
// while loop
// do while loop

/*
foreach($collectios as $item){
// do something with that item
}

*/

// people = {
//     "name": "John",
//     "age": 30,
//     "city": "New York"
// };

$people = [
    [
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    ],
    [
        "name" => "Jane Doe",
        "age" => 25,
        "city" => "Los Angeles"
    ],
    [
        "name" => "Mike",
        "age" => 35,
        "city" => "Chicago"
    ]
];

$loopCounter = 1;
echo "<table border='1' style='width: 100%; border-collapse: collapse;'>
        <thead>
            <tr style='background-color: #f2f2f2;'>
                <th style='padding: 10px;'>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>City</th>
            </tr>
        </thead>
    ";
foreach ($people as $person) {
    echo "<tr>
            <td style='padding: 10px;'>" . $loopCounter . "</td>
            <td>" . $person['name'] . "</td>
            <td>" . $person['age'] . "</td>
            <td>" . $person['city'] . "</td>
        </tr>";
    $loopCounter++;
}

echo "</table>";