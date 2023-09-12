<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name = "Md. Rejwan Ahmed";
        $father_name = "Md. Alauddin";
        $mother_name = "Fatema Begum";
        $address = "Section-12, Block-E, Line-03, House-78, Mirpur,Dhaka-1216";
        $religion = "Islam";
        $nationality = "Bangladeshi";
        $age = "26 years";
        $contact_no = "01775781898";
        $introduction = "Hi, this is Md. Rejwan Ahmed. I want to develop my career as a web developer. I am interested to explore myself with the newest technology of software and I like to build up a dynamic and superior professional life in a challenging atmosphere with my creativity and knowledge. I am looking for opportunity to enhance my skills."
    ?>

    <div class = "center">
        <table>
            <caption><h3>My Personal Information</h3></caption>
            <tr>
                <th>Name:</th>
                <td> <?php echo $name ?></td>
            </tr>
            <tr>
                <th>Father Name: </th>
                <td><?php echo $father_name ?></td>
            </tr>
            <tr>
                <th>Mother Name: </th>
                <td><?php echo $mother_name ?></td>
            </tr>
            <tr>
                <th>Address: </th>
                <td><?php echo $address ?></td>
            </tr>
            <tr>
                <th>Religion: </th>
                <td><?php echo $religion ?></td>
            </tr>
            <tr>
                <th>Nationality: </th>
                <td><?php echo $nationality ?></td>
            </tr>
            <tr>
                <th>Age: </th>
                <td><?php echo $age ?></td>
            </tr>
            <tr>
                <th>Contact No: </th>
                <td><?php echo $contact_no ?></td>
            </tr>
            <tr>
                <th>Brief Introduction: </th>
                <td><?php echo $introduction ?></td>
            </tr>
        </table>
    </div>
</body>
</html>


