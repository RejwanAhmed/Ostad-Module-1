<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method = "POST">
    <div class="center">
            <div>
                <label for="">Enter Temperature:</label>
                <input class = "form-control" type="number" name = "temperature" placeholder="Enter Temperature" required>
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
    $temperature = $_POST['temperature'];

    if ( $temperature <= 0 ) {
        $result = "It's freezing!";
    } else
    if ( $temperature > 0 && $temperature <= 15 ) {
        $result = "It's cool.";
    } else
    if ( $temperature > 15 ) {
        $result = "It's warm.";
    } else {
        $result = "Invalid temperature data.";
    }

    ?>
        <script>
            document.getElementById("show_result").innerHTML = "<?php echo $result ?>";
        </script>
    <?php
}
