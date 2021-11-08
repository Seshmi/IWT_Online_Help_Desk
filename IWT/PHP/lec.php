<?php

session_start();
echo "user name : " . $_SESSION{"name"}."<br>";

echo "password :" . $_SESSION{"ps"};

?>