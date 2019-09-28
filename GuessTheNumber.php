
<html>

<head>
  <title>GuessTheNumber </title>
</head>
<body>
  <div>



   <?php

   
   $message="";
   $message2="";
      $numTries=0;   //счетчик попыток
      $guess="";
      $numToGuess="";
      



         if ( !isset($_POST['guess']) ) {          // иссет - проверка что там нету никакой информациим в поле

           $numToGuess = mt_rand(0,100);           //создаем случайное число

           $message="Hello";


         }elseif ($_POST['guess']>$_POST['numToGuess']) {
           $message=$_POST['guess'] ." это много!";
         }elseif ($_POST['guess']<$_POST['numToGuess']) {
           $message=$_POST['guess'] ." это мало!";
         }else {

          header("location:congrats.html");

        }

        if(isset($_POST['guess'])){            

         $numTries=(int)$_POST['numTries'];
         $guess=(int)$_POST['guess'];
         $numToGuess=(int)$_POST['numToGuess'];
         $message2=(string)$_POST['message2'];

       }



       echo "guessed number: ".$numToGuess."<br><br>";      
       echo $message;

   /* if ( ! empty( $_POST['guess'] ) ) {
       print "Last answer: " . $_POST['guess'];
     }*/

     ?>
     





     <p>Attempts done:  <?php echo $numTries++; ?></p>

     <p>Your tried: 
      <?php 

      $message2.=$guess."&nbsp";

      echo $message2;

      ?>  
    </p>





    <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">

      <p>
        <input type="hidden" name="numTries" value= &nbsp <?php echo $numTries; ?> /> 
        <input type="hidden" name="message2" value= <?php echo $message2; ?> />
        <input type="hidden" name="numToGuess" value= <?php echo (int)$numToGuess; ?> />

        Enter your answer: <input type="number" name="guess" autofocus/>

        <input type="submit" value="Answer" />
      </p>
    </form>
  </div>



</body>
</html>