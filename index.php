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
<button type="button" class="btn btn-success">CLICK ME!</button>
<button type="button" class="btn btn-danger">CLICK ME!</button>
<a class="btn btn-danger" target="_blank" href="https://www.heroku.com">Heroku.com</a>
<?php
    require 'includes/footer.php';;
?>