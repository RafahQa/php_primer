<?php
    $title= "If Statement";
    include 'includes/header.php';
?>
<body>
    <?php
        //An if statement that will carry out an action based on the value of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 70;
        //== ,=== , < , > , <= ,>=
        if($grade >= 50)
        {
            echo '<h3 style = "color: green" >YOU HAVE PASSED</h3>';
        }
        else
        {
            echo '<h3 style = "color: red">YOU HAVE FAILED</h3>';
        }
        $grade = 'f';
        //if-else if-else
        if($grade == 'A')
        {
            echo '<h2>YOR ARE A SUPERSTAR!</h2>';
        }
        elseif($grade == 'B')
        {
            echo '<h2>YOU DID WELL!</h2>'; 
        }
        else
        {
            echo '<h2>YOU HAVE FAILED..</h2>';
        }
    ?>
<?php
    require 'includes/footer.php';;
?>