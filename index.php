<?php
// Array of card data
$storeArray = array(
    array("title1", "description1"),
    array("title2", "description2"),
    array("title3", "description3"),
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cards</title>
    <style>
        /* Add some basic styling */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            width: 200px;
            display: inline-block;
            text-align: center;
            background-color: #f9f9f9;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Loop through the array and create a card for each item
        for ($i = 0; $i < count($storeArray); $i++) {
            echo "<div class='card'>";
            echo "<h3>" . $storeArray[$i][0] . "</h3>"; // Title
            echo "<p>" . $storeArray[$i][1] . "</p>";  // Description
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>

