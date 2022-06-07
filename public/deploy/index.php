<?php

$cmd = `touch secondfile.txt`;

$output1 =  exec($cmd);



echo $output1;

echo "<br/>";


$output2 = exec('ls -la');



echo $output2;
