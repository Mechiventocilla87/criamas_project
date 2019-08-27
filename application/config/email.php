<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'useragent'=> 'CodeIgniter',
	'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	'smtp_host' => 'smtp.googlemail.com',
	'smtp_port' => 465,
	'smtp_user' => 'lvsmix@gmail.com',
	'smtp_pass' => 'Mercedes2019',
	'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
	'mailtype' => 'text', //plaintext 'text' mails or 'html'
	'smtp_timeout' => 5, //in seconds
	'charset' => 'iso-8859-1',
	'wordwrap' => TRUE,
	'wrapchars'=> 76,
	'validate'=>FALSE,
	'priority'=> 3,
    'crlf'=> '\r\n',
    'newline'=>'\r\n',
    'bcc_batch_mode' => FALSE,
    'bcc_batch_size' => 200
);

