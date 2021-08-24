<?php
    $title= "Date and Time";
    include 'includes/header.php';
?>
<body>
    <h1>Date and Time Manipulation</h1>

    <?php
        $datenow = getdate();
        echo "Today's Date: ". $datenow['mday'].'/'. $datenow['mon'].'/'.$datenow['year'].'<br/>';
        echo "Time is: ".time().'<br/>';

        print date("d/m/y G.i:s<br/>",time()).'<br/>';
        
        print "Today is: ".date("j of F Y, \a\\t g.i a",time());

        
    ?>
<?php
    require 'includes/footer.php';;
?>