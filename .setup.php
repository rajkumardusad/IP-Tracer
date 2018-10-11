<?php
class set {
  public function Setup() {
    system("rm -rf ~/.IP-Tracer");
    system("rm -rf /data/data/com.termux/files/usr/bin/ip-tracer");
    system("rm -rf /usr/bin/ip-tracer");
    system("sudo rm -rf ~/.IP-Tracer");
    system("sudo rm -rf /usr/bin/ip-tracer");

    system("rm -rf /data/data/com.termux/files/usr/bin/trace");
    system("rm -rf /usr/bin/trace");
    system("sudo rm -rf /usr/bin/trace");

    system("mv -v ip-tracer /data/data/com.termux/files/usr/bin/");
    system("mv -v ip-tracer /usr/bin/");
    system("sudo mv -v ip-tracer /usr/bin/");
    system("mv -v trace /data/data/com.termux/files/usr/bin/");
    system("mv -v trace /usr/bin/");
    system("sudo mv -v trace /usr/bin/");

    system("chmod +x /data/data/com.termux/files/usr/bin/ip-tracer trace");
    system("chmod +x /usr/bin/ip-tracer trace");
    system("sudo chmod +x /usr/bin/ip-tracer trace");

    system("mkdir ~/.IP-Tracer");
    system("sudo mkdir ~/.IP-Tracer");
    system("mv -v * *.* .*.* ~/.IP-Tracer");
    system("sudo mv -v .*.* *.* * ~/.IP-Tracer");
    system("cd .. && rm -rf IP-Tracer");
    system("cd .. && sudo rm -rf IP-Tracer");
  }
  function logo() {
    system("clear");
    echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m ____    _
     \033[01;31m(_)\033[01;33m  _ \  | |_ _ __ __ _  ___ ___ _ __
     | | |_) | | __| '__/ _` |/ __/ _ \ '__|
     | |  __/  | |_| | | (_| | (_|  __/ |
     |_|_|      \__|_|  \__,_|\___\___|_|


    \033[01;37m}\033[01;31m--------------------------------------\033[01;37m{
 }\033[01;31m------------- \033[01;32mTrack IPLocation\033[01;31m -------------\033[01;37m{
    }\033[01;31m--------------------------------------\033[01;37m{

\033[00m
EOL;

    if (file_exists("/usr/bin/ip-tracer")) {
      echo "\n\n\033[01;32m      IP-Tracer installed Successfully !!!\033[00m\n\n";
      echo <<<EOL

\033[01;37m -----------------------------------------------
|         \033[01;36mcommand\033[01;37m        |        \033[01;36mUse\033[01;37m           |
 -----------------------------------------------
| \033[01;32mip-tracer -m\033[01;37m           | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mip-tracer -t traget-ip\033[01;37m | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mip-tracer\033[01;37m              | \033[01;33mFor more information\033[01;37m |
 -----------------------------------------------

\033[01;31mNote :- ip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
    } else if(file_exists("/data/data/com.termux/files/usr/bin/ip-tracer")) {
      echo "\n\033[01;32m      IP-Tracer installed Successfully !!!\033[00m\n";
      echo <<<EOL

\033[01;37m -----------------------------------------------
|         \033[01;36mcommand\033[01;37m        |        \033[01;36mUse\033[01;37m           |
 -----------------------------------------------
| \033[01;32mip-tracer -m\033[01;37m           | \033[01;33mTrack your IP\033[01;37m        |
| \033[01;32mip-tracer -t traget-ip\033[01;37m | \033[01;33mTrack IP\033[01;37m             |
| \033[01;32mip-tracer\033[01;37m              | \033[01;33mFor more information\033[01;37m |
 -----------------------------------------------

\033[01;33m Note :-\033[01;31m ip-api will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
    } else {
      echo "\n\n\033[01;31m  Sorry IP-Tracer is not installed !!!\033[00m";
    }
  }
}
$a=new set;
$a->Setup();
$a->logo();
?>
