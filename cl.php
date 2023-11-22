<?php
while(1){
$x = shell_exec("pm2 show cl");
if(preg_match("/errored/", $x)) {
   shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
    sleep(4000);
}elseif ("/online/") {
   shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
    sleep(4000);
}elseif ("/N/A/") {
   shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
      sleep(4000);
  }
}