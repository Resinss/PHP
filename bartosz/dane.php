<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        $name = $_POST['imie'];
        $surname = $_POST['nazwisko'];
        $mail = $_POST['mail'];
        $password = $_POST['haslo'];
        $birth_date = $_POST['data urodzenia'];
        $street= $_POST['ulica'];
        $house= $_POST['dom'];
        $postcode= $_POST['kodpocztowy'];
        $city= $_POST['miasto'];
        echo "$name" . "<br/>";
        echo "$surname" . "<br/>";
        echo "$mail" . "<br/>";
        echo "$password" . "<br/>";
        echo "$birth_date" . "<br/>";
        echo "$street" . "<br/>";
        echo "$house" . "<br/>";
        echo "$postcode" . "<br/>";
        echo "$city" . "<br/>";
        ?>
        
</body>
</html>