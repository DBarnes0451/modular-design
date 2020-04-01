<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style-two.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans&display=swap" rel="stylesheet"> 
    </head>
    <header>
        <h1 class="title">Lorem Ipsum</h1>
    </header>
    <div class="modular-grid">
    <body>
        <div class="horizontal-nav">
            <?php include('horizontal-nav.php'); ?>
        </div>
        <div class="hero-image">
            <?php include('hero-block.php'); ?>
        </div>
        <div class="text-block-one">
            <?php include('text-block-flex.php'); ?>
        </div>
        <div class="column-segment">
            <?php include('column-segment.php'); ?>
        </div>
    </body>
    </div>
    <footer>
        <?php include('footer.php'); ?>
    </footer>
</html>

