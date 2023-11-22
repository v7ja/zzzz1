<?php
while(1){
$x = shell_exec("pm2 show dl");
if(preg_match("/errored/", $x)) {
  shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
    sleep(4000);
}elseif ("/online/") {
   shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
    sleep(4000);
}elseif ("/N/A/") {
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
      sleep(4000);
  }
}