<?php
while(1){
$x = shell_exec("pm2 show el");
if(preg_match("/errored/", $x)) {
  shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
    sleep(4000);
}elseif ("/online/") {
  shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
    sleep(4000);
}elseif ("/N/A/") {
  shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
      sleep(4000);
  }
}