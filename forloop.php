<?php
    $title= "For Loops";
    include 'includes/header.php';
?>
<body>
   <h1>For Loops</h1> 

   <?php
    //For Loops
        for ($i=0; $i < 10 ; $i++)
        { 
            echo '<p>HELLO WORLD!</p>';
        }
    //For Loops
        for ($i=0; $i <= 10 ; $i++)
        { 
            echo "<p>The Count is: $i</p> ";
        }
   ?>
<?php
    require 'includes/footer.php';;
?>