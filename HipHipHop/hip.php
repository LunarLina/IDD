<html>
<head>
<h1>Hip Hop</h1>
</head>
<body>


<?php
for($i = 1;$i<=100;$i++) {
    echo '<br/>';

    if(($i%3 === 0)&&($i%5 === 0)) 
    { echo 'HipHop';
        continue; 
    } else if($i % 3 === 0) 
    { 
        echo 'Hip';
    } else if(($i %  5 === 0)) 
    { 
        echo 'Hop'; 
    } else
    { 
        echo $i; 
    }
    
    }
?>
</body>

</html>
