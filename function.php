<?php
    $title= "Functions";
    include 'includes/header.php';
?>
<body>
    <h1>Functions</h1>

    <?php
        /*Defining a Function*/ 

        function writeMessage()
        {
             echo "You are really nice, Have a nice time!!"; 
        }

        // calling a function
        writeMessage();
        echo "<hr/>";

        /*Defining a Function with Parameters*/

        function addFunction($num1, $num2)
        {
            $sum=$num1+$num2;
             
            echo "The sum of $num1 and $num2 is: $sum <br/>";

        }
        /*pass by reference*/
        function changeNum(&$num)
        {
            $num = $num + 10;

        }
        $num=500;
        addFunction(10,20);
        addFunction('10',"50");

        changeNum($num);
        echo $num.'<br/>';

        /*Defining a Function with return value */
        function returnProduct($num1,$num2)
        {
            $prod = $num1 * $num2;
            return $prod;
        }

        $return_value = returnProduct(10,500);
        echo $return_value;


    ?>
<?php
    require 'includes/footer.php';;
?>