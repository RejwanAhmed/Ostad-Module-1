<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
        <form action="" method = "POST">
            <div>
                <label for="">Convert From </label>
                <select class = "form-control" name="conversion_type" id="" required>
                    <option value="" selected>Please Select </option>
                    <option value="celsius">Celsius To Farenheit</option>
                    <option value="farenheit">Farenheit To Celsius</option>
                </select>
            </div>

            <div>
                <label for="">Enter Value</label>
                <input class = "form-control" type="number" name = "value" placeholder="Enter Value" required>
            </div>

            <div>
                <input class = "form-control btn" type="submit" name = "submit" value = "Calculate">
            </div>

            <div>
                <p style = "color: green; text-align:center; font-weight:bold;" id = "show_result"></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php

if ( isset( $_POST['submit'] ) ) {
    $conversion_type = $_POST['conversion_type'];
    $value = $_POST['value'];
    
    $conversion_to = "";
    if ( 'celsius' == $conversion_type ) {
        $result = ( $value * 1.8 ) + 32;
        $conversion_to = "fahrenheit";
    } else if ( 'farenheit' == $conversion_type ) {
        $result = ( $value - 32 ) * ( 5 / 9 );
        $conversion_to = "celsius";
    } else {
        $result = "Error";
    }
    $final_result_to_show = "Conversion from {$conversion_type} to {$conversion_to} of {$value} = {$result}";
    ?>
        <script>
            document.getElementById("show_result").innerHTML = "<?php echo $final_result_to_show ?>";
        </script>
    <?php
}
