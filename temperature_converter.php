<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        .center {
            border: 5px solid;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
        }
        .form-control{
            width: 100%;
            padding: 10px 15px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .btn{
            background-color: lightblue;
            color: black;
            font-weight: bold;
            border-radius: 10px;
        }
    </style>
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
    
    $given_value = $value;
    if ( 'celsius' == $conversion_type ) {
        $result = ( $value * 1.8 ) + 32;
    } else if ( 'farenheit' == $conversion_type ) {
        $result = ( $value - 32 ) * ( 5 / 9 );
    } else {
        $result = "Error";
    }

    ?>
        <script>
            document.getElementById("show_result").innerHTML = "Result = " + <?php echo $result ?>;
        </script>
    <?php
}
