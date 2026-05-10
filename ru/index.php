<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'header.php';
include 'content.php';

// Улучшенное определение мобильных устройств
function isMobileDevice() {
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        
        $mobileAgents = [
            'iphone', 'ipad', 'android', 'blackberry', 'windows phone', 
            'opera mini', 'mobile', 'tablet', 'ipod'
        ];
        
        foreach ($mobileAgents as $mobile) {
            if (strpos($agent, $mobile) !== false) {
                return true;
            }
        }
    }
    return false;
}

// Подключаем contact-call.php ТОЛЬКО на десктопе и больших планшетах
if (!isMobileDevice()) {
    include 'contact-call.php';
}
include 'subscribe.php';
include 'footer.php';
?>