<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
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
                <select class = "form-control" name="operation" id="">
                    <option value="" selected>Please Select</option>
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
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
    $operation = $_POST['operation'];

    if ( 'add' == $operation ) {
        $result = $first_value + $second_value;
    } else
    if ( 'subtract' == $operation ) {
        $result = $first_value - $second_value;
    } else
    if ( 'multiply' == $operation ) {
        $result = $first_value * $second_value;
    } else
    if ( 'divide' == $operation ) {
        $result = $first_value / $second_value;
    }

    ?>
        <script>
            document.getElementById("show_result").innerHTML = "Result = <?php echo $result ?>";
        </script>
    <?php
}
