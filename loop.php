<?php
    $colors = ["red", "blue", "green", "yellow", "purple", "orange"];

    // Handle form submission
    $selectedColor = "";
    if (isset($_POST['submit'])) {
        $selectedColor = $_POST['color'];
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>

</head>
<body>
    <style>
        body{
            margin: 0%;
            padding: 0%;
            font-family: Arial, Helvetica, sans-serif;
        }
        .card{
            width: fit-content;
            height: fit-content;
            margin: 100px auto;
            padding: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        </style>
    <div class="card">
        <h1>Available Colors</h1>
    <ul>
        <?php
            // Loop through colors and display them with their respective styles
            foreach ($colors as $color) {
                echo "<li style='color: $color;'>$color</li>";
            }
        ?>
    </ul>

    <h2>Select a Color</h2>
    <form action="arrays.php" method="post">
        <label for="color">Choose a color:</label>
        <select name="color" id="color" required>
            <?php
                // Populate the dropdown with colors
                foreach ($colors as $color) {
                    echo "<option value='$color'>$color</option>";
                }
            ?>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    
    <?php
        // Display the selected color in an h2 tag with the same style
        if ($selectedColor) {
            echo "<h2 style='color: $selectedColor;'>You selected: $selectedColor</h2>";
        }
        ?>


</div>
</body>
</html>




<?php

$people = [
    [
        "name" => "emma",
        "age"  => "20",
        "city" => "Georgia",
    ],
    [
        "name" => "John",
        "age"  => "22",
        "city" => "Yauonde",
    ],
    [
        "name" => "Doe",
        "age"  => "23",
        "city" => "Douala",
    ],
    [
        "name" => "jenior",
        "age"  => "18",
        "city" => "Newyork",
    ],
    [
        "name" => "Diland",
        "age"  => "15",
        "city" => "Chicago",
    ],
];

        $loopCounter = 1;
        echo "<table border ='1' style='width: 100%; border-collapse: collapse;'>
 <thead>
 <tr style='background-color: #f2f2f2;'>
 <th style='padding: 10px;'>number</th>
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
    ?>
    
    <!-- $loopCounter = 1;
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
 -->
