<?php
echo "hello";
$content=file_get_contents("php://input");
$update=json_decode($content,true);
$chatID=$update["message"]["text"];
$reply="Хорошего дня";
$sendto="https://api.telegram.org/bot255944248:AAGtXyWZqUrn5Cer_hRRVRpu2Z0pybQA7Q8/sendmessage?chat_id=".$chatID."&text=".$reply;
file_get_contents($sendto);
?>
