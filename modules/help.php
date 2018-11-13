<?php
function help() {
    logo();
    echo <<<EOL
\033[01;37m -----------------------------------------------
|         \033[01;36mcommand\033[01;37m        |        \033[01;36mUse\033[01;37m           |
 -----------------------------------------------
| \033[01;32mtrace -m\033[01;37m               | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mtrace -t <traget-ip>\033[01;37m   | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mtrace --help\033[01;37m           | \033[01;33mFor more information\033[01;37m |
 -----------------------------------------------

\033[01;33m Note :- \033[01;31mip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $prompt="\033[00m";
  echo $prompt;
  $getact = readline(' IP-Tracer >> ');
  menu();
}
?>
