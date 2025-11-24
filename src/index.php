<?php
// Function to get the client IP address
function getClientIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// Get user IP address
$user_ip = getClientIP();

// Optional: Additional data you might want to log
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'UNKNOWN';
$timestamp = date('Y-m-d H:i:s');
$accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? 'UNKNOWN';
$query_string = $_SERVER['QUERY_STRING'] ?? '';
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN';

// Prepare log message
$log_message = "Time: $timestamp, IP: $user_ip, Method: $request_method, Query: $query_string, Agent: $user_agent, Lang: $accept_language\n";

// Log to a file
file_put_contents("visitors.log", $log_message, FILE_APPEND);

// Return user IP
echo $user_ip;
?>