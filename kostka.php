<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <h1>PHP - Pracownia</h1>

    <form method="GET">

        <h3>Liczba rzutów</h3>
        <input name="s" placeholder="Podaj szerokosc kostki">
        <br>
        <input name="r" placeholder="Podaj liczbe rzutów">
        <br>
        <input type="submit" name="roll" value="Rzuć">

    </form>


    <?php
        if(isset($_GET['roll'])) {

            $s = $_GET['s'];
            $r = $_GET['r'];

            for($i = 0; $i<$r; $i++) {
                $random = (rand(1, $s));
                echo '<br>'.$random;
            }
        }
    ?>

</body>

<script src="main.js"></script>

</html>