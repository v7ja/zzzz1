<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
function getupdates($up_id) {
$get = bot('getupdates', ['offset' => $up_id]);
return end($get['result']);
}
$botuser = "@" . bot('getme', ['bot']) ["result"]["username"];
file_put_contents("_ad.txt", $botuser);
function stats($nn) {
	$st = "";
	$x = shell_exec("pm2 show $nn");
	if (preg_match("/online/", $x)) {
		$st = "run";
	}
	else {
		$st = "stop";
	}
	return $st;
}
function states($g) {
$st = "";
$x = shell_exec("pm2 show $g");
if(preg_match("/online/", $x)) {
$st = "run";
}else{
$st = "stop";
}
return $st;
}
function countUsers($u = "2", $t = "2") {
if ($t == "2") {
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
if ($t == "1") {
$users = explode("\n", $u);
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
}
 $last_up = $last_up;
function ph($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("a.madeline");
	unlink("a.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('a.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 1 - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "⌁ Checker number - 1 - ،\n⌁ I can't Login"]);
		return false;
shell_exec("php step.php");	}
	
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Send password \n⌁ Ex : - Adel- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Done Login ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}

$step = "";
function run($update) {
global $step;
$nn = bot('getme', ['bot']) ["result"]["username"];
$message = $update['message'];
$userID = $message['from']['id'];
$chat_id = $message['chat']['id'];
$name = $message['from']['first_name'];
$text = $message['text'];
$date = $update['callback_query']['data'];
$cq = $update['callback_query'];
$data = $cq['data'];
$message_id = $cq['message']['message_id'];
$chat_id2 = $cq['message']['chat']['id'];
$group = file_get_contents("ID");
$ad = array("$group");
if($text == "/start" and !in_array($chat_id,$ad) and $chat_id != $group = null){
bot('sendmessage',[ 
'chat_id'=>$chat_id,  
'text'=>" 
𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , 
𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 
𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 ᶤ [$name](tg://user?id=$chat_id) ᶤ 
",'parse_mode' => "MarkDown", 'disable_web_page_preview' => true,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "بايرو", 'url' => "https://t.me/p_yro"]],
[['text' => "-𝒎𝒆 𝒄𝒉𝒂𝒏𝒏𝒆𝒍'", 'url' => "https://t.me/p_yro"]],
]]) 
]);
}

if ($chat_id == $group) {
if ($text) {
if($text == '/start' or $text == '->' or $text == "Back"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , 
𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 
𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 ᶤ [$name](tg://user?id=$chat_id) ᶤ ",
'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"𖠜 Requests"]],
[["text" =>"𖠜 Run"],["text" =>"𖠜 Stop"]],
[["text" =>"𖠜 Add Users"],["text" =>"𖠜 Delet User"]],
[["text" =>"𖠜 Clear list"],["text" =>"𖠜 Show list"]],
[["text" =>"𖠜 Delet Number"],["text" =>"𖠜 Add Number"]],[["text" =>"𖠜 Numbers"]],] ]) ]);
}

if ($text == "Login1") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 1 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop al.php");
unlink("a.madeline");
unlink("a.madeline.lock");
file_put_contents("step","2");
  system('php g1.php');
	}
	if ($text == "Login2") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 2 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop bu.php");
	shell_exec("pm2 stop bc.php");
	shell_exec("pm2 stop bl.php");
	unlink("b.madeline");
	unlink("b.madeline.lock");
	file_put_contents("step2","2");
  system('php g2.php');
	}
	if ($text == "Login3") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 3 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop cc.php");
	shell_exec("pm2 stop cl.php");
	shell_exec("pm2 stop ca.php");
	unlink("c.madeline");
	unlink("c.madeline.lock");
	file_put_contents("step3","2");
	system('php g3.php');
	}
	if ($text == "Login4") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 4 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop dl.php");
	shell_exec("pm2 stop da.php");
	shell_exec("pm2 stop dc.php");
	unlink("d.madeline");
	unlink("d.madeline.lock");
	file_put_contents("step4","2");
	system('php g4.php');
	}
	if ($text == "Login5") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⌁ Checker number - 5 - \n⌁ Send You Number Phone\n⌁ Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop el.php");
	shell_exec("pm2 stop ea.php");
	shell_exec("pm2 stop ec.php");
	unlink("e.madeline");
	unlink("e.madeline.lock");
	file_put_contents("step5","2");
	system('php g5.php');
	}

if ($text == "𖠜 Add Number") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "𖠜 Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"->"]],
[["text" =>"Login1"],["text" =>"Login2"]],
[["text" =>"Login3"],["text" =>"Login4"]],
[["text" =>"Login5"]], ]]) ]);
}

if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users'));
if(preg_match("/@+/", $text)){
if($mode == 'pinall'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users", "\n" . $user, FILE_APPEND);
file_put_contents("u2", "\n" . $user, FILE_APPEND);
file_put_contents("u3", "\n" . $user, FILE_APPEND);
file_put_contents("u4", "\n" . $user, FILE_APPEND);
file_put_contents("u5", "\n" . $user, FILE_APPEND);
file_put_contents("u6", "\n" . $user, FILE_APPEND);
file_put_contents("u7", "\n" . $user, FILE_APPEND);
file_put_contents("u8", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : ⌁ Done Pin All.🚀",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 start aa.php");
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users"));
file_put_contents("users", $data);
file_put_contents("users",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 1 :@$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
} elseif($mode == 'addL'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("users"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("users", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 1 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u2'));
if(preg_match("/@+/", $text)){
if($mode == 'Pi0n'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u2", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"⌁ Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin2'){
echo 'Unpin2';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u2"));
file_put_contents("u2", $data);
file_put_contents("u2",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u2"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad2'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u2"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u2", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 2 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u3'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u3", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin3'){
echo 'Unpin3';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u3"));
file_put_contents("u3", $data);
file_put_contents("u3",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u3"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 3 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad3'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u3"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u3", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 3 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u6'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u6", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin6'){
echo 'Unpin6';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u6"));
file_put_contents("u6", $data);
file_put_contents("u6",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u6"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 6 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad6'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u6"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u6", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 6 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u7'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u7", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin7'){
echo 'Unpin7';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u7"));
file_put_contents("u7", $data);
file_put_contents("u7",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u7"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 7 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad7'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u7"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u7", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 7 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u8'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u8", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin8'){
echo 'Unpin8';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u8"));
file_put_contents("u8", $data);
file_put_contents("u8",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u8"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 8 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad8'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u8"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u8", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 8 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u4'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u4", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin4'){
echo 'Unpin4';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u4"));
file_put_contents("u4", $data);
file_put_contents("u4",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u4"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 4 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad4'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u4"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u4", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 4 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u5'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u5", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : ⌁ Done Pin ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin5'){
echo 'Unpin5';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u5"));
file_put_contents("u5", $data);
file_put_contents("u5",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u5"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Delet User List 5 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad5'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u5"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u5", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "⌁ Done Added Users To List 5 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('Band'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("Band", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : ⌁ Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unband'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("Band"));
file_put_contents("Band", $data);
file_put_contents("Band",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("Band"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "⌁ Done deleted user from List Band : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adband'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("Band"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("Band", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "⌁ Done added users to List band \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}
////
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('bot'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("bot", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : ⌁ Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unbot'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("bot"));
file_put_contents("bot", $data);
file_put_contents("bot",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("bot"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "⌁ Done deleted user List bot : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adbot'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("bot"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("bot", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "⌁ Done added users to List bot \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}}
if ($chat_id == $group) {
if($text == "𖠜 Clear list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Choose button ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ List 📋 1",'callback_data' => "CLEAR1"]],
[['text' => "⌁ List 📋 2",'callback_data' => "CLEAR2"]],
[['text' => "⌁ List 📋 3",'callback_data' => "CLEAR3"]],
[['text' => "⌁ List 📋 4",'callback_data' => "CLEAR4"]],
[['text' => "⌁ List 📋 5",'callback_data' => "CLEAR5"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
$info = json_decode(file_get_contents('info.json'),true);
$number1 = file_get_contents('phone1');
$number2 = file_get_contents('phone2');
$number3 = file_get_contents('phone3');
$number4 = file_get_contents('phone4');
$number5 = file_get_contents('phone5');
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
if ($chat_id == $group) {
if($text == "𖠜 Numbers"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ info Numbers ♦️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$number1",'callback_data' => "#Back"]],
[['text' => "$number2",'callback_data' => "#Back"]],
[['text' => "$number3",'callback_data' => "#Back"]],
[['text' => "$number4",'callback_data' => "#Back"]],
[['text' => "$number5",'callback_data' => "#Back"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "#Bc"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ",
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"-𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶'", 'url' => "https://t.me/l_lll"],['text'=>"-𝒎𝒆 𝒄𝒉𝒂𝒏𝒏𝒆𝒍'", 'url' => "https://t.me/iii8i"]],
]]) 
]);
unlink('mode');
}
if($data == "Band"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Data Checker Band , king @iii8i 🐊",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"▫️Add User",'callback_data'=>"M1"],['text'=>"▫️Delet User",'callback_data'=>"M2"]],
[['text'=>"▫️Stop",'callback_data'=>"M3"],['text'=>"▫️Run",'callback_data'=>"M4"]],
[['text'=>"▫️Delet Number",'callback_data'=>"dband"]],
[['text'=>"▫️Show Users",'callback_data'=>"MM"],['text'=>"▫️Delet All Users",'callback_data'=>"M8"]],
]
])]);
}
///////////////////////////////////////////
if($data == "bot"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Data Checker bot , king @iii8i 🐊",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"▫️Add User",'callback_data'=>"O1"],['text'=>"▫️Delet User",'callback_data'=>"O2"]],
[['text'=>"▫️Stop",'callback_data'=>"O3"],['text'=>"▫️Run",'callback_data'=>"O4"]],
[['text'=>"▫️Name Bot",'callback_data'=>"O5"]],
[['text'=>"▫️Delet Number",'callback_data'=>"dbot"]],
[['text'=>"▫️Show Users",'callback_data'=>"M7"],['text'=>"▫️Delet All Users",'callback_data'=>"O8"]],
]
])]);
}
if($data == "#bot"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Data Checker bot , king @iii8i",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"▫️Add User",'callback_data'=>"O1"],['text'=>"▫️Delet User",'callback_data'=>"O2"]],
[['text'=>"▫️Stop",'callback_data'=>"O3"],['text'=>"▫️Run",'callback_data'=>"O4"]],
[['text'=>"▫️Name Bot",'callback_data'=>"O5"]],
[['text'=>"▫️Delet Number",'callback_data'=>"dbot"]],
[['text'=>"▫️Show Users",'callback_data'=>"M7"],['text'=>"▫️Delet All Users",'callback_data'=>"O8"]],
]
])]);
}
if($data == "CLEAR1"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 1 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("users", "");
}
if($data == "CLEAR2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 2 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u2", "");
}
if($data == "CLEAR3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 3 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u3", "");
}
if($data == "CLEAR4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 4 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u4", "");
}
if($data == "CLEAR5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents("u5", "");
 
}
if ($chat_id == $group) {
if($text == "𖠜 Show list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => " Show All ⌁ 1",'callback_data' => "1Show"]],
[['text' => " Show All ⌁ 2",'callback_data' => "2Show"]],
[['text' => " Show All ⌁ 3",'callback_data' => "3Show"]],
[['text' => " Show All ⌁ 4",'callback_data' => "4Show"]],
[['text' => " Show All ⌁ 5",'callback_data' => "5Show"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "1Show"){
if(file_exists("users")){
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 1 !  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 1",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "2Show"){
if(file_exists("u2")){
$users = explode("\n", file_get_contents("u2"));
$list2 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list2 = $list2 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 2  \n".$list2,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list2 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 2",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "3Show"){
if(file_exists("u3")){
$users = explode("\n", file_get_contents("u3"));
$list3 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list3 = $list3 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 3   \n".$list3,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list3 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 3",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "4Show"){
if(file_exists("u4")){
$users = explode("\n", file_get_contents("u4"));
$list4 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list4 = $list4 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 4 \n".$list4,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list4 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 4",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "6Show"){
if(file_exists("u6")){
$users = explode("\n", file_get_contents("u6"));
$list6 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list6 = $list6 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 6  \n".$list6,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list6 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 6",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "7Show"){
if(file_exists("u7")){
$users = explode("\n", file_get_contents("u7"));
$list7 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list7 = $list7 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 7  \n".$list7,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list7 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 7",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "8Show"){
if(file_exists("u8")){
$users = explode("\n", file_get_contents("u8"));
$list8 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list8 = $list8 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 8  \n".$list8,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list8 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 8",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "5Show"){
if(file_exists("u5")){
$users = explode("\n", file_get_contents("u5"));
$list5 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list5 = $list5 . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List 5  \n".$list5,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
$list5 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}}
if($data == "MM"){
if(file_exists("Band")){
$users = explode("\n", file_get_contents("Band"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List Band  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list Band",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "M7"){
if(file_exists("bot")){
$users = explode("\n", file_get_contents("bot"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧@$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ The All Users List bot  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" ⌁ No users in list bot",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if ($chat_id == $group) {
if($text == "𖠜 Add Nurerer4trmber"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"𖠜 Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Number 1",'callback_data' => "ADD1"]],
[['text' => "⌁ Number 2",'callback_data' => "ADD2"]],
[['text'=>"⌁ Number 3",'callback_data'=>"ADD3"],['text'=>"⌁ Number 4",'callback_data'=>"ADD4"]],
[['text' => "⌁ Number 5",'callback_data' => "ADD5"]],
]])]);
}}
if ($chat_id == $group) {
if($text == "𖠜 To Bot ↺ Band"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Checkers Band and Bot 🐊",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"[ Checker Bot ]",'callback_data'=>"bot"],['text'=>"[ Checker Band ]",'callback_data'=>"Band"]],
]])]);
}}
if ($step == "ph") {
ph($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p2") {
p2($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "DH") {
DH($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p4") {
p4($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p5") {
p5($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}

if ($chat_id == $group) {
if($text == "𖠜 Delet Number"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Delet Number 1",'callback_data' => "1DL"]],
[['text' => "⌁ Delet Number 2",'callback_data' => "2DL"]],
[['text' => "⌁ Delet Number 3",'callback_data' => "3DL"]],
[['text' => "⌁ Delet Number 4",'callback_data' => "4DL"]],
[['text' => "⌁ Delet Number 5",'callback_data' => "5DL"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "1DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  1",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop al.php");
shell_exec("pm2 stop ac.php");
system('rm -rf a.madeline');
system('rm -rf a.madeline.lock');
system('rm -rf a.madeline.lightState.php');
system('rm -rf a.madeline.lightState.php.lock');
system('rm -rf a.madeline.safe.php');
system('rm -rf a.madeline.safe.php.lock');
unlink("a.madeline"); 
unlink("a.madeline.lock");
unlink("a.madeline.lightState.php");
unlink("a.madeline.lightState.php.lock");
unlink("a.madeline.safe.php");
unlink("a.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "2DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  2",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 stop bc.php");
system('rm -rf b.madeline');
system('rm -rf b.madeline.lock');
system('rm -rf b.madeline.lightState.php');
system('rm -rf b.madeline.lightState.php.lock');
system('rm -rf b.madeline.safe.php');
system('rm -rf b.madeline.safe.php.lock');
unlink("b.madeline"); 
unlink("b.madeline.lock");
unlink("b.madeline.lightState.php");
unlink("b.madeline.lightState.php.lock");
unlink("b.madeline.safe.php");
unlink("b.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "3DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  3",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop ca.php");
system('rm -rf c.madeline');
system('rm -rf c.madeline.lock');
system('rm -rf c.madeline.lightState.php');
system('rm -rf c.madeline.lightState.php.lock');
system('rm -rf c.madeline.safe.php');
system('rm -rf c.madeline.safe.php.lock');
unlink("c.madeline"); 
unlink("c.madeline.lock");
unlink("c.madeline.lightState.php");
unlink("c.madeline.lightState.php.lock");
unlink("c.madeline.safe.php");
unlink("c.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "4DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  4",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop dc.php");
system('rm -rf d.madeline');
system('rm -rf d.madeline.lock');
system('rm -rf d.madeline.lightState.php');
system('rm -rf d.madeline.lightState.php.lock');
system('rm -rf d.madeline.safe.php');
system('rm -rf d.madeline.safe.php.lock');
unlink("d.madeline"); 
unlink("d.madeline.lock");
unlink("d.madeline.lightState.php");
unlink("d.madeline.lightState.php.lock");
unlink("d.madeline.safe.php");
unlink("d.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "No number";
file_put_contents('info.json', json_encode($info));
}

if($data == "5DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Delet Number  5",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop el.php");
system('rm -rf e.madeline');
system('rm -rf e.madeline.lock');
system('rm -rf e.madeline.lightState.php');
system('rm -rf e.madeline.lightState.php.lock');
system('rm -rf e.madeline.safe.php');
system('rm -rf e.madeline.safe.php.lock');
unlink("e.madeline"); 
unlink("e.madeline.lock");
unlink("e.madeline.lightState.php");
unlink("e.madeline.lightState.php.lock");
unlink("e.madeline.safe.php");
unlink("e.madeline.safe.php.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "No number";
file_put_contents('info.json', json_encode($info));
 
}if ($chat_id == $group) {
if($text == "𖠜 Stop"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Stop ❌ 1",'callback_data' => "STOP1"]],
[['text' => "⌁ Stop ❌ 2",'callback_data' => "STOP2"]],
[['text' => "⌁ Stop ❌ 3",'callback_data' => "STOP3"]],
[['text' => "⌁ Stop ❌ 4",'callback_data' => "STOP4"]],
[['text' => "⌁ Stop ❌ 5",'callback_data' => "STOP5"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "STOP1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List 1 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop al.php");
}
if($data == "STOP2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker  \n⌁ Checker Stoped List  2 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop bl.php");
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
}
if($data == "STOP3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker  \n⌁ Checker Stoped List  3 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop ca.php");
}
if($data == "STOP4"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n⌁ Checker Stoped List  4 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
}
if($data == "STOP5"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Done Stoped Checker \n- Checker Stoped List  5 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop el.php");
}if ($chat_id == $group) {
if($text == "𖠜 Run"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ Run ✅ 1",'callback_data' => "1Run"]],
[['text' => "⌁ Run ✅ 2",'callback_data' => "2Run"]],
[['text' => "⌁ Run ✅ 3",'callback_data' => "3Run"]],
[['text' => "⌁ Run ✅ 4",'callback_data' => "4Run"]],
[['text' => "⌁ Run ✅ 5",'callback_data' => "5Run"]],
[['text'=>"->",'callback_data'=>"#Back"]],

]])]);
}}
if($data == "1Run"){
	unlink('xa');
	shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
shell_exec("pm2 stop al.php");
shell_exec("pm2 start al.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 1 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if($data == "2Run"){
	unlink('xb');
	shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 start bl.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 2 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if($data == "3Run"){
	unlink('xc');
	shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 start cl.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 3 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if($data == "4Run"){
	unlink('xd');
	shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 start dl.php");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 4 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if($data == "5Run"){
shell_exec("pm2 stop ea.php");
shell_exec("pm2 start ea.php");
shell_exec("pm2 stop el.php");
shell_exec("pm2 start el.php");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Run Checker 5 . " ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
}
if ($chat_id == $group) {
if($text == "𖠜 Add Users"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"𖠜 Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ List 📋 1",'callback_data' => "#1"]],
[['text' => "⌁ List 📋 2",'callback_data' => "#2"]],
[['text' => "⌁ List 📋 3",'callback_data' => "#3"]],
[['text' => "⌁ List 📋 4",'callback_data' => "#4"]],
[['text' => "⌁ List 📋 5",'callback_data' => "#5"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}if ($chat_id == $group) {
if($text == "/Delet"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁ Done Delet all Lists",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
unlink('type');
unlink('type2');
unlink('type3');
unlink('type4');
unlink('type5');
unlink('type6');
unlink('type7');
unlink('type8');
unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
unlink('u6');
unlink('u7');
unlink('u8');
}}
if($data == "#1"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 1 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'addL');
}
if($data == "#2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 2 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad2');
}
if($data == "#3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 3 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad3');
}
if($data == "#4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 4 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad4');
}
if($data == "#5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad5');
}
$info = json_decode(file_get_contents('info.json'),true);
$S1 = explode("\n",file_get_contents("users"));
$S2 = explode("\n",file_get_contents("u2"));
$S3 = explode("\n",file_get_contents("u3"));
$S4 = explode("\n",file_get_contents("u4"));
$S5 = explode("\n",file_get_contents("u5"));
$S6 = explode("\n",file_get_contents("u6"));
$S7 = explode("\n",file_get_contents("u7"));
$S8 = explode("\n",file_get_contents("u8"));
$Sum1 = count($S1)-1;
$Sum2 = count($S2)-1;
$Sum3 = count($S3)-1;
$Sum4 = count($S4)-1;
$Sum5 = count($S5)-1;
$Sum6 = count($S6)-1;
$Sum7 = count($S7)-1;
$Sum8 = count($S8)-1;
$F = $Sum1+$Sum2+$Sum3+$Sum4+$Sum5+$Sum6+$Sum7+$Sum8;
$info["USERS"] = "$F";
file_put_contents('info.json', json_encode($info));
$sum = $info["USERS"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
$num6 = $info["num6"];
$num7 = $info["num7"];
$num8 = $info["num8"];
if ($data == "#Back") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text' => "𝒘𝒆𝒍𝒄𝒐𝒎𝒆 , \n𝒊𝒏 𝒕𝒉𝒆 𝒄𝒉𝒆𝒄𝒌𝒆𝒓 𝒖𝒔𝒆𝒓 𝒏𝒂𝒎𝒆 𝒕𝒆𝒍𝒆𝒈𝒓𝒂𝒎 \n𝒅𝒆𝒗𝒆𝒍𝒐𝒑𝒆𝒅 𝒃𝒚 𝒌𝒂𝒓𝒓𝒂𝒓 𝒔𝒂𝒃𝒂𝒉 🇮🇶 @iii8i . ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"All UserName - $sum - ",'callback_data'=>"#sum"]],
]])]);
}


////////
if ($chat_id == $group) {
if($text == "𖠜 Delet User"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁ List 📋 1",'callback_data' => "1#"]],
[['text' => "⌁ List 📋 2",'callback_data' => "2#"]],
[['text' => "⌁ List 📋 3",'callback_data' => "3#"]],
[['text' => "⌁ List 📋 4",'callback_data' => "4#"]],
[['text' => "⌁ List 📋 5",'callback_data' => "5#"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "1#"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 1.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH1"]],]])]);
file_put_contents('mode', 'Unpin');
}
if($data == "2#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List 2 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH2"]],]])]);
file_put_contents('mode', 'Unpin2');
}
if($data == "3#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  3 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH3"]],]])]);
file_put_contents('mode', 'Unpin3');
}
if($data == "4#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  4 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH4"]],]])]);
file_put_contents('mode', 'Unpin4');
}
if($data == "5#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁ Send List  5 .",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#CH5"]],]])]);
file_put_contents('mode', 'Unpin5');
 
}
if($data == "#sum"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"⌁Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "⌁1 Users - $Sum1 - ",'callback_data' => "1Show"]],
[['text' => "⌁2 Users - $Sum2 - ",'callback_data' => "2Show"]],
[['text' => "⌁3 Users - $Sum3 - ",'callback_data' => "3Show"]],
[['text' => "⌁4 Users - $Sum4 - ",'callback_data' => "4Show"]],
[['text' => "⌁5 Users - $Sum5 - ",'callback_data' => "5Show"]],
[['text'=>"->",'callback_data'=>"#Back"]],
]])]);
 
file_put_contents("z", $F);
}
$in = json_decode(file_get_contents('in.json'),true);
$loop1 = $in["loop1"];
$loop2 = $in["loop2"];
$loop3 = $in["loop3"];
$loop4 = $in["loop4"];
$loop5 = $in["loop5"];
if ($chat_id == $group) {
if($text == '𖠜 Requests'){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"𖠜 Clicks Requests Of Numbers 𓆪 •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 ↣  $loop1",'callback_data'=>"U"],['text'=>"2 ↣  $loop2",'callback_data'=>"U"]],
[['text'=>"3 ↣  $loop3",'callback_data'=>"U"],['text'=>"4 ↣  $loop4",'callback_data'=>"U"]],
[['text'=>"5 ↣  $loop5",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}}
if($data == "U"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"𖠜 Clicks Requests Of Numbers 𓆪 •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 ↣  $loop1",'callback_data'=>"N"],['text'=>"2 ↣  $loop2",'callback_data'=>"N"]],
[['text'=>"3 ↣  $loop3",'callback_data'=>"N"],['text'=>"4 ↣  $loop4",'callback_data'=>"N"]],
[['text'=>"5 ↣  $loop5",'callback_data'=>"N"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}
if($data == "N"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"𖠜 Clicks Requests Of Numbers 𓆪 •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 ↣  $loop1",'callback_data'=>"U"],['text'=>"2 ↣  $loop2",'callback_data'=>"U"]],
[['text'=>"3 ↣  $loop3",'callback_data'=>"U"],['text'=>"4 ↣  $loop4",'callback_data'=>"U"]],
[['text'=>"5 ↣  $loop5",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}


if($data == "M1"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ Add users list Band ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
file_put_contents('mode', 'adband');
}
if($data == "M2"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ Add users list Band ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
file_put_contents('mode', 'Unband');
}
if($data == "M4"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im Run Band ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
 unlink('xba');   
shell_exec("pm2 stop Band.php");
shell_exec("pm2 start Band.php");
shell_exec("pm2 stop ba.php");
shell_exec("pm2 start ba.php");
$lop = 0;
file_put_contents("xba", $lop);
$info = json_decode(file_get_contents('info.json'),true);
$info["Band"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "M3"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im stopped Band ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
    unlink('xba');
shell_exec("pm2 stop Band.php");
shell_exec("pm2 stop ba.php");
    $lop = 0;
file_put_contents("xba", $lop);
$info = json_decode(file_get_contents('info.json'),true);
$info["Band"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "M8"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Send the user to delete !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#Bc"]],]]) ]);
unlink("Band");
}

if($data == "O1"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ Add users list Bot",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
file_put_contents('mode', 'adbot');
}
if($data == "O2"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"⌁ send banned users list ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
file_put_contents('mode', 'Unbot');
}
if($data == "O4"){
	unlink('xm');
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im Run bot ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 start m.php");
shell_exec("pm2 stop ml.php");
shell_exec("pm2 start ml.php");
$lop = 0;
file_put_contents("xm", $lop);
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "O3"){
	unlink('xm');
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
⌁ Im stopped bot ✅
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 stop ml.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "O8"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"⌁ Send the user to delete ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
unlink("bot");
}
if($data == "O5"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- Send the Name Bot !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"->",'callback_data'=>"#bot"]],]]) ]);
$step = "bot";
}
$lastupdid = $update['result'][0]['update_id'] + 1; 
}
while (true) {
global $last_up;
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
run($get_up);
}
}
?>