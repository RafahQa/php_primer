<?php
    $title= "String";
    include 'includes/header.php';
?>
<body>
    <h1>PHP String Manipulation</h1>
    <?php
        //Concatenation of strings
        $phrase1 = "students who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "rafah kattan";
        echo $phrase1." ".$phrase2;
        echo '<br/>';
        echo '<hr/>';

        // String transformation
        echo 'UpperCase first letter: '.ucfirst($name).'<br/>';
        echo 'UpperCase first letter of each word: '.ucwords($name).'<br/>';
        echo 'UpperCase: '.strtoupper($name).'<br/>';
        echo 'LowerCase: '.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String: '.str_repeat('r',5).strtoupper(str_repeat('o',5)).'<br/>';
        echo 'Get a Substring: '. substr($name,2,3).'<br/>';
        echo 'Get position of string: '. strpos($name,'a').'<br/>';
        echo 'Find Character "a": '. strchr($name,'a').'<br/>';
        echo 'Find Length of String: '. strlen($name).'<br/>';

        echo 'without Trim: '."A"." B C D "."E".'<br/>';
        echo 'Trim spaces: '."A". trim(" B C D ")."E".'<br/>';
        echo 'Trim spaces to the left: '."A". ltrim(" B C D ")."E".'<br/>';
        echo 'Trim spaces to the right: '."A". rtrim(" B C D ")."E".'<br/>';

        echo 'Replace string with amother: '. str_replace("stand", "sit", $phrase2). '<br/>';
    ?>
<?php
    require 'includes/footer.php';;
?>