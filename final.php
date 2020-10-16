<?php include 'database.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>PHP Quizzer</title>
</head>
<body>
    <header>
    <div class="container">
        <h1>PHP Quizzer</h1>
    </div>
    </header>
    <main>
        <div class="container">
          <h2>You'r Done!</h2>
          <p>Congrats! You have completed the test</p>
          <p>Final Score: <?php echo $_SESSION['score'];?></p>
          <a href="question.php?n=1" class="start">Take Again</a>
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &COPY; 2014, PHP Quizzer
        </div>
    </footer>
</body>
</html>