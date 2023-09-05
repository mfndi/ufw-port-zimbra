<?php 

echo '
╭╮╱╭┳━━━┳╮╭╮╭╮╭━━━┳━━━┳━━━┳━━━━╮╭━━━━┳━━┳━╮╭━┳━━╮╭━━━┳━━━╮╱╱╱╱╭━━━┳━━━┳━━━┳━━━┳━━━┳━━━╮
┃┃╱┃┃╭━━┫┃┃┃┃┃┃╭━╮┃╭━╮┃╭━╮┃╭╮╭╮┃╰━━╮━┣┫┣┫┃╰╯┃┃╭╮┃┃╭━╮┃╭━╮┃╱╱╱╱┃╭━━┫╭━━┫╭━╮┃╭━╮┃╭━╮┃╭━━╯
┃┃╱┃┃╰━━┫┃┃┃┃┃┃╰━╯┃┃╱┃┃╰━╯┣╯┃┃╰╯╱╱╭╯╭╯┃┃┃╭╮╭╮┃╰╯╰┫╰━╯┃┃╱┃┃╱╱╱╱┃╰━━┫╰━━┫┃╱╰┫┃╱┃┃╰━╯┃╰━━╮
┃┃╱┃┃╭━━┫╰╯╰╯┃┃╭━━┫┃╱┃┃╭╮╭╯╱┃┃╱╱╱╭╯╭╯╱┃┃┃┃┃┃┃┃╭━╮┃╭╮╭┫╰━╯┃╭━━╮┃╭━━┫╭━━┫┃╱╭┫┃╱┃┃╭╮╭┫╭━━╯
┃╰━╯┃┃╱╱╰╮╭╮╭╯┃┃╱╱┃╰━╯┃┃┃╰╮╱┃┃╱╱╭╯━╰━┳┫┣┫┃┃┃┃┃╰━╯┃┃┃╰┫╭━╮┃╰━━╯┃┃╱╱┃╰━━┫╰━╯┃╰━╯┃┃┃╰┫╰━━╮
╰━━━┻╯╱╱╱╰╯╰╯╱╰╯╱╱╰━━━┻╯╰━╯╱╰╯╱╱╰━━━━┻━━┻╯╰╯╰┻━━━┻╯╰━┻╯╱╰╯╱╱╱╱╰╯╱╱╰━━━┻━━━┻━━━┻╯╰━┻━━━╯' . PHP_EOL;

echo "\n";
echo 'ALTAFLIX' . PHP_EOL;
echo 'LINK PORT ZIMBRA : https://wiki.zimbra.com/wiki/Ports' . PHP_EOL;
echo "\n";

$red = "\033[31m";
$green = "\033[32m";
$yellow = "\033[33m";
$reset = "\033[0m";

echo "Proses Add Rules Open Port" . PHP_EOL;

$port_open = file("port_open.txt");
for($i=0; $i < count($port_open); $i++){
    $PORT = trim($port_open[$i]);
    $exec = shell_exec("ufw allow $PORT/tcp");
   echo $green . 'Success Add Port => ' . trim($port_open[$i]). $reset . PHP_EOL;
}

echo $red . "Persiapan Close Port......". $reset;
sleep(5);
echo "/n";

$port_close = file("port_close.txt");
for($i=0; $i < count($port_close); $i++){
    $PORT = trim($port_close[$i]);
    $exec = shell_exec("ufw allow from 127.0.0.1 to any port $PORT");
    echo $green . 'Success Add Port => ' . trim($port_close[$i]). $reset . PHP_EOL;
}
