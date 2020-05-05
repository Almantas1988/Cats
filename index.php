<?php session_start();

//pages count

if (isset($_SESSION['pages_count'])) {
    $_SESSION['pages_count']++;
} else {
    $_SESSION['pages_count'] = 1;
}

//auto refreshing

$page = $_SERVER['PHP_SELF'];
$sec = "60";


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cats</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--auto refreshing-->
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    
</head>

<body>

    <div class="alert alert-success" role="alert">
        Puslapio aplankymo skaičius: <?php echo $_SESSION['pages_count']; ?>
    </div>

    <div class="alert alert-success" id="timer">
         Laikas: <span></span>
    </div>

    <div class="container">
        <div>
            <h3>Cats list:</h3>
                <div>
                    <?php
                      $cats = fopen("cats.txt", "r") or die("Unable to open file!");

                    while(!feof($cats)) {
                       echo fgets($cats) . "<br>";
                    }
                    fclose($cats);
                
                    ?>
                </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="time.js"></script>

</body>

</html>