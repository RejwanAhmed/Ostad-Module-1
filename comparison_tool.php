<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method = "POST">
        <div class="center">
            <div>
                <label for="">Enter Value 1:</label>
                <input class = "form-control" type="number" name = "value1" placeholder="Enter First Value" required>
            </div>

            <div>
                <label for="">Enter Value 2:</label>
                <input class = "form-control" type="number" name = "value2" placeholder="Enter Second Value" required>
            </div>

            <div>
                <input class = "form-control btn" type="submit" name = "submit" value = "Calculate">
            </div>

            <div>
                <p style = "color: green; text-align:center; font-weight:bold;" id = "show_result"></p>
            </div>
        </div>
    </form>
</body>
</html>
<?php

if ( isset( $_POST['submit'] ) ) {
    $first_value = $_POST['value1'];
    $second_value = $_POST['value2'];

    $result = ( $first_value > $second_value ) ? $first_value : (  ( $first_value == $second_value ) ? "Both Are Equal" : $second_value );

    ?>
        <script>
            document.getElementById("show_result").innerHTML = "<?php echo $result ?>";
        </script>
    <?php
}
