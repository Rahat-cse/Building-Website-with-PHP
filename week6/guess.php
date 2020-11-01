<!Doctype html>
<html>
<head>
<title>Guessing Game for Rahat Mahmud Khan c946bc13</title>
</head>
<body>
  <h1>Welcome to my Guessing Game</h1>
  <?php
  $number=41;
  if(isset($_GET['guess'])){

    if (strlen($_GET['guess'])<1) {
    echo "Your guess is too short";
    }
    elseif(is_numeric($_GET['guess'])===FALSE)
    {
      echo"Your guess is not a number";
    }
    elseif ($_GET['guess']<$number) {
      echo"your guess is too low";
    }
    elseif ($_GET['guess']>$number) {
      echo"your guess is too high";
    }
    elseif ($_GET['guess']==$number) {
      echo"Congratulations-You are right";
    }

  }
  else {
  echo"Missing guess parameter<br>Your guess is too short";
  }
   ?>
</body>
</html>
