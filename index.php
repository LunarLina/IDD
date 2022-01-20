<html>
<head>
<h1>1-100</h1>
</head>
<body>
    <?php
    //Teller op nul zetten
    $teller = 0;

    //Tot honderd tellen
    for( $i=1; $i<=100; $i++ )
    {
        echo $i;
        echo '<br />';
        //Teller verhogen
        $teller = $teller + 1;
        //Kijken of de teller op tien staat
        if($teller == 10)
        {
            //Als t zo is
            //Teller weer op nul zetten
            $teller = 0;
            //Naar een nieuwe regel gaan
        }
    }
    ?>

</body>

</html>