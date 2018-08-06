<?php
function help() {
    logo();
    echo <<<EOL

\033[01;37m -----------------------------------------------
|         \033[01;36mcommand\033[01;37m        |        \033[01;36mUse\033[01;37m           |
 -----------------------------------------------
| \033[01;32mip-tracer -m\033[01;37m           | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mip-tracer -t traget-ip\033[01;37m | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mip-tracer\033[01;37m              | \033[01;33mFor more information\033[01;37m |
 -----------------------------------------------

\033[01;33m Note :- \033[01;31mip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $prompt=" \033[0;32m\033[04mIP-Tracer\033[00m >>\033[01;37m ";
  echo $prompt;
  $getact = readline('');
  menu();
}
?>
