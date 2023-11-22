<?php
while(1){
$x = shell_exec("pm2 show bl");
if(preg_match("/errored/", $x)) {
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 start bu.php");
    shell_exec("pm2 start bl.php");
    sleep(4000);
}elseif ("/online/") {
     shell_exec("pm2 stop bu.php");
    shell_exec("pm2 start bu.php");
    shell_exec("pm2 start bl.php");
    sleep(4000);
}elseif ("/N/A/") {
     shell_exec("pm2 stop bu.php");
    shell_exec("pm2 start bu.php");
    shell_exec("pm2 start bl.php");
      sleep(4000);
  }
}