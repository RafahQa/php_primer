<?php
    $title= "Index";
    include 'includes/header.php';
?>
    <!-- Basic HTML -->
    <h1>Hello HTML!- PHP Primer</h1>
    <br/>
    <?php
        //printing to HTML using echo 
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
        
    ?>


    <?php
        // declare variable
        $name = 'Rafah Kattan';
        $age = 23;
        // echo variable
        echo $name;
        echo '<h1>my name is: '.$name.'</h1>';
        echo '<h1>my age is: '.$age.'</h1>';
        echo "<h1> my name is: $name </h1>";
    ?>
<button type="button" class="btn btn-dark">CLICK ME!</button>
<?php
    require 'includes/footer.php';;
?>