<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method = "POST">
        <div class="center">
            <div>
                <label for="">Enter First Test Score:</label>
                <input class = "form-control" type="number" name = "test_score1" placeholder="Enter First Test Score" required>
            </div>
            
            <div>
                <label for="">Enter Second Test Score:</label>
                <input class = "form-control" type="number" name = "test_score2" placeholder="Enter Second Test Score" required>
            </div>
            
            <div>
                <label for="">Enter Third Test Score:</label>
                <input class = "form-control" type="number" name = "test_score3" placeholder="Enter Third Test Score" required>
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

    $test_score1 = $_POST['test_score1'];
    $test_score2 = $_POST['test_score2'];
    $test_score3 = $_POST['test_score3'];
    
    $avg = ($test_score1 + $test_score2 + $test_score3) / 3;
    
    if($avg>=80){
        $result = "Your result = {$avg} and Grade = A";
    } else if($avg<80 && $avg>=70){
        $result = "Your result = {$avg} and Grade = B";
    }else if($avg<70 && $avg>=60){
        $result = "Your result = {$avg} and Grade = C";
    }else if($avg<60 && $avg>=50){
        $result = "Your result = {$avg} and Grade = D";
    }else{
        $result = "Your result = {$avg} and Grade = F";
    }
 
    ?>
        <script>
            document.getElementById("show_result").innerHTML = "<?php echo $result ?>";
        </script>
    <?php
}