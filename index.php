<?php
require_once __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container-header">
            <img src="img/logo-spotify.png" alt="">
        </div>
    </header>
    <main>
        <div class="container-main">

            <?php foreach ($database as $disc): ?>
              <div class="card">
                <div class="cover">
                    <img style="width: 100%;" src="<?php echo $disc['poster'] ?>" alt="">
                </div>
                <h3><?php echo $disc['title'] ?></h3>
                <p><?php echo $disc['author'] ?></p>
                <p><?php echo $disc['year'] ?></p>

              </div>

            <?php endforeach; ?>

        </div>
    </main>
</body>
</html>