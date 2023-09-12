<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method = "POST">
    <div class="center">
            <div>
                <label for="">Enter number to find even or odd:</label>
                <input class = "form-control" type="number" name = "even_odd" placeholder="Enter Number" required>
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
    $value = $_POST['even_odd'];

    if ( $value % 2 == 0 ) {
        $result = "{$value} is even number";
    } else {
        $result = "{$value} is odd number";
    }

    ?>
        <script>
            document.getElementById("show_result").innerHTML = "<?php echo $result ?>";
        </script>
    <?php
}
