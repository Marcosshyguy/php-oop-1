<?php
require __DIR__ . "./db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php OOP</title>
</head>

<body>
    <h1>Movies</h1>

    <div>
        <?php foreach ($movies as $movie) { ?>

            <h3><?php echo $movie->title ?></h3>
            <ul>
                <li><?php echo 'Genre: ' . $movie->genres ?></li>
                <li><?php echo 'Director: ' . $movie->director_name ?></li>
                <li><?php echo 'Realese date: ' . $movie->realese_date ?></li>
                <?php if ($movie->plot) {
                    echo '<li>' . 'Plot: ' . $movie->plot . '</li>';
                } else {
                    echo '<li>' . 'Plot: N/A' . '</li>';
                }
                ?>
            </ul>
        <?php } ?>
    </div>
</body>

</html>