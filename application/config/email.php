<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Easy!Appointments';
$config['protocol'] = 'smtp';
$config['mailtype'] = 'html'; // or 'text'
$config['smtp_auth'] = TRUE; // Enable SMTP authentication
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_user'] = 'tomermadarbusiness@gmail.com';
$config['smtp_pass'] = 'T0miBus!1998'; // Replace with your actual password or, ideally, an App Password if 2FA is enabled
$config['smtp_crypto'] = 'tls'; // Use TLS encryption (or 'ssl' for port 465)
$config['smtp_port'] = 587; // Port 587 for TLS
$config['from_name'] = 'Tomi\'s Place';
$config['from_address'] = 'tomermadarbusiness@gmail.com';
$config['reply_to'] = 'tomermadarbusiness@gmail.com';
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
