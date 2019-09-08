<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	"useragent"=> "CodeIgniter",
	"protocol" => "smtp", // 'mail', 'sendmail', or 'smtp'
	"smtp_host" => "smtp.googlemail.com",
	"smtp_port" => 587,
	"smtp_user" => "mail_de_gmail",
	"smtp_pass" => "password_gmail",
	"smtp_crypto" => "tls", //can be 'ssl' or 'tls' for example
	"mailtype" => "html", //plaintext 'text' mails or 'html'
	"send_multipart" => FALSE,
	"charset"  => "utf-8",
	"subject" => "Criamas Contacto",
	"wordwrap" => TRUE,
	"newline"  => "\r\n"
);

