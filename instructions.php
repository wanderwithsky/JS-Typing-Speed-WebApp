<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Typing Speed Tester</title>
</head>

<body>

  <div>
    <div class="quiz-container" id="quiz">
      <div class="quiz-header">
        <h2 style="color: black;">Welcome,
          <?php echo $_SESSION['username']; ?>
        </h2>
        <h4 style="text-align: center; font-weight: normal; color: white; ">
        </h4>
        <p id="question">This is a typing test. Your goal is to duplicate the provided text, EXACTLY, in the field below. The timer starts when you start typing, and only stops when you match this text exactly.</p><h3> <br> Good Luck!</h3>
      </div>
      <button id="submit" onclick="location.href='main.php'">Start</button>
    </div>


  </div>


</body>

</html>