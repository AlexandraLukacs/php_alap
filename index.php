<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <?php
        # kiíratás
        echo '<p>Ezt a PHP írta.</p>';
        echo('echo zárójellel');
        print '<br>pint eredménye';
        print('<br>print zárójellel<br>');
        var_dump($GLOBALS);
        //konstans
        echo '<br>';
        define("GREETING","Hello you! How are you today?");
        echo constant("GREETING");
        // $ jellel kezdődik a változó
        $szoveg1 = 'Egykor'; 
        $szoveg2 = "végzek";
        // Az összefűzés jele php-ban a pont
        echo "<br>A két szöveg együtt: ".$szoveg1." ".$szoveg2;
        echo "<br>A két szöveg együtt: $szoveg1 $szoveg2";
        // Az idézőjelek nem egyformák
        echo '<br>A két szöveg együtt: $szoveg1 $szoveg2';
        // Működik a rövid operátor itt is
        $szoveg8 = "Szép";
        $szoveg8 .=" napot!";
        echo "<br>$szoveg8";
        echo pow(2.0, 1024);
        $tort1 = 3.56;
        $tort2 = 3.44;
        $eredmeny = $tort1+$tort2;
        echo "<br>A két szám összege: $eredmeny";
        echo '<br>';
        echo gettype($eredmeny);
        // ternary operator
        echo '0:        '.(boolval(0) ? 'true' : 'false')."\n";
        echo '42:       '.(boolval(42) ? 'true' : 'false')."\n";
        echo '0.0:      '.(boolval(0.0) ? 'true' : 'false')."\n";
        echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."\n";
        echo '"":       '.(boolval("") ? 'true' : 'false')."\n";
        echo '"string": '.(boolval("string") ? 'true' : 'false')."\n";
        echo '"0":      '.(boolval("0") ? 'true' : 'false')."\n";
        echo '"1":      '.(boolval("1") ? 'true' : 'false')."\n";
        echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."\n";
        echo '[]:       '.(boolval([]) ? 'true' : 'false')."\n";
        echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false')."\n";
        // logikai, hamist nem írja ki
        $logikai1 = true;
        $logikai2 = false;
        echo "<br>A két logikai érték: ".$logikai1." ".$logikai2;
        echo '<br>';
        $a = array("red", "green", "blue");
        print_r($a);
        // Tömbt nem tudunk echo-val kiíratni
        // echo $a;
        var_dump($GLOBALS);
        echo '<br>';
        $tomb0 = array(1,2,3,4,5);
        $tomb1 = array();
        $tomb2[0] = "Ady Endre";
        $tomb2[1] = "József Attila";
        $tomb3 = ["Milan Kundera", "Hermann Hesse"];
        $tomb2[] = "Tóth Árpád";
        array_push($tomb2, "Móricz Zsigmond");
        print_r($tomb2);
        echo '<br>';
        echo "A tömb elemszáma: " .count($tomb2);
        echo '<br>';
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        print_r($b);
        

    ?>

</body>
</html>