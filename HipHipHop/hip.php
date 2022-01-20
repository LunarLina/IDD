<html>
<head>
<h1>Hip Hip Hop</h1>
</head>
<body>

<?php

for( $i=1; $i<=100; $i++ )
{
    //Om te checken of het klopt ↓
    // echo $i //
    if($i % 3 == 0) 
{
    echo "<br />";
    echo "Hip";
} 
elseif ($i % 5 == 0) 
{
    echo "Hop";
    echo "<br />";
}
}

?>
</body>

</html>