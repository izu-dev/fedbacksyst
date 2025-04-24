<?php
// Array of colors
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
    <link rel="stylesheet" href="arrays.css">
</head>
<body>
    <div class="card">
    <h2>Available Colors</h2>
    <ul>
        <?php
        // Loop through colors and display them with their respective styles
        foreach ($colors as $color) {
            echo "<h3 style='color: $color;'>$color</h3>";
        }
        ?>
    </ul>

    <h3>Select a Color</h3>
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

    <?php
    // Display the selected color in an h2 tag with the same style
    if ($selectedColor) {
        echo "<h2 style='color: $selectedColor;'>You selected: $selectedColor</h2>";
    }
    ?>
    </div>
</body>
</html>