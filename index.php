<?php include 'database.php'; ?>
<?php 
$query="SELECT * FROM questions";
$results=$mysqli->query($query) or die($mysqli->error.__LINE__);//will tell us what's the error if something is wrong
$total =$results->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stle.css" type="text/css">
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
           <h2>Test Your PHP Knowledge</h2>
           <p>This is a multiple choice quiz to test your knowledge of PHP</p>
           <ul>
               <li><strong>Number of Question: </strong><?php echo $total; ?></li>
               <li><strong>Type: </strong>multiple choice</li>
               <li><strong>Estimated Time: </strong><?php echo $total*5; ?> Minutes</li>
           </ul>
           <a href="question.php?n=1" class="start">Start quiz</a> <!--n=1 means the question number one-->
        </div>
    </main>
    <footer>
        <div class="container">
            Copyright &COPY; 2014, PHP Quizzer
        </div>
    </footer>
</body>
</html>