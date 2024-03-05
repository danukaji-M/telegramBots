<?php

require_once __DIR__ . '/vendor/autoload.php';

// Replace 'YOUR_BOT_TOKEN' with your actual bot token
$botToken = 'YOUR_BOT_TOKEN';

use TelegramBot\Api\BotApi;

$telegram = new BotApi($botToken);

// Replace 'CHAT_ID' with the ID of the chat you want to send a message to
$chatId = 'CHAT_ID';

$response = $telegram->sendMessage( $chatId,'Hello, world!');

// If the message was sent successfully, $response will contain information about the message
// Otherwise, it will contain false
if ($response) {
    echo 'Message sent successfully!';
} else {
    echo 'Failed to send message.';
}