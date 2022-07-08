<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

    function logIP()
    {
        $ipLog="iplist.txt"; // Your logfiles name here (.txt or .html extensions ok)

        // IP logging function by Dave Lauderdale
        // Originally published at: www.digi-dl.com

        $register_globals = (bool) ini_get('register_gobals');
        if ($register_globals) $ip = getenv(REMOTE_ADDR);
        else $ip = $_SERVER['REMOTE_ADDR'];

        $date=date ("l dS of F Y h:i:s A");
        $log=fopen("$ipLog", "a");

        if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
        {
            fputs($log, "Logged IP address: $ip - Date logged: $date<br>");
        }
        else fputs($log, "Logged IP address: $ip - Date logged: $date\
    ");

        fclose($log);
}
logIp();
?> 

    
    
    <h1 class="basicheading">amoguns1</h1>
</body>
</html>
