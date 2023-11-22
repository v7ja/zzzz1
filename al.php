<?php
while(1){
$x = shell_exec("pm2 show al");
if(preg_match("/errored/", $x)) {
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 start aa.php");
    shell_exec("pm2 start al.php");
    sleep(4000);
}elseif ("/online/") {
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 start aa.php");
    shell_exec("pm2 start al.php");
    sleep(4000);
}elseif ("/N/A/") {
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 start aa.php");
    shell_exec("pm2 start al.php");
      sleep(4000);
  }
}