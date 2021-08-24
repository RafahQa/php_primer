<?php
    $title= "Arrays and Printouts";
    include 'includes/header.php';
?>
<body>
    <h1><?php echo $title; ?></h1>
    <?php
        // a variable
        $num=3;

        // an array with only one dataType
        $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

        echo $numbers[5];
        
        echo "<p>$numbers[9]</p>";
        
        $size = count($numbers);
        
        echo "<p>Array Numbers's size is: $size </p>";

        for($i=0;$i<$size;$i++)
        {
            echo "$numbers[$i] ";
        }


    ?>
<?php
    require 'includes/footer.php';;
?>