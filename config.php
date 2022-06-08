<?php

$server = "db.dw082.nameserver.sk";
$db = "samod_sk5";
$port = "3306";
$user = "samod_sk5";
$pass  = "U9gaV6Ks";

$conn = "";
$conn = mysqli_connect($server,$user,$pass,$db,$port);



/*if (!$conn)
{
    die("Spojenie neuspesne: ". mysqli_connect_error());
}

else
{
    echo "spojenie uspesne";
}*/