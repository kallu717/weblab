<html>
    <head>
        <title>Program 9</title>
    </head>
    <body>
        <h1>State search</h1>
        <?php 
            $states = "Mississippi Alabama Texas Massachussets Kansas";
            echo "<hr />";

            preg_match('/\b(\w*xas)\b/', $states, $match);
            $statesList[0] = $match[0];

            preg_match('/\b(k\w*s)\b/i', $states, $match);
            $statesList[1] = $match[0];

            preg_match('/\b(M\w*s)\b/', $states, $match);
            $statesList[2] = $match[0];

            preg_match('/\b(\w*a)\b/', $states, $match);
            $statesList[3] = $match[0];

           print_r($statesList)
        ?>
    </body>
</html>
