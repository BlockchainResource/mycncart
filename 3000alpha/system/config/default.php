<?php
// 网址
$_['site_url']             = '';
$_['site_ssl']             = false;

// Url
$_['url_autostart']        = true;

// 语言
$_['language_directory']   = 'zh-cn';
$_['language_autoload']    = array('zh-cn');

// 时区
$_['date_timezone']        = 'PRC';

// 数据库
$_['db_engine']            = 'mysqli'; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']          = 'localhost';
$_['db_username']          = 'root';
$_['db_password']          = '';
$_['db_database']          = '';
$_['db_port']              = 3306;
$_['db_autostart']         = false;

// 邮件
$_['mail_engine']          = 'mail'; // mail or smtp
$_['mail_from']            = ''; // Your E-Mail
$_['mail_sender']          = ''; // Your name or company name
$_['mail_reply_to']        = ''; // Reply to E-Mail
$_['mail_smtp_hostname']   = '';
$_['mail_smtp_username']   = '';
$_['mail_smtp_password']   = '';
$_['mail_smtp_port']       = 25;
$_['mail_smtp_timeout']    = 5;
$_['mail_verp']            = false;
$_['mail_parameter']       = '';

// 缓存方式
$_['cache_engine']         = 'file'; // apc, file, mem or memcached
$_['cache_expire']         = 3600;

// 会话
$_['session_engine']       = 'db';
$_['session_autostart']    = true;
$_['session_name']         = 'MCCSESSID';

// 模板
$_['template_engine']      = 'twig';
$_['template_directory']   = '';
$_['template_cache']       = false;
$_['template_extension']   = '.twig';

// 错误
$_['error_display']        = true;
$_['error_log']            = true;
$_['error_filename']       = 'error.log';

// 响应头
$_['response_header']      = array('Content-Type: text/html; charset=utf-8');
$_['response_compression'] = 0;

// 自动加载配置
$_['config_autoload']      = array();

// 自动加载类
$_['library_autoload']     = array();

// 自动加载类
$_['model_autoload']       = array();

// 操作
$_['action_default']       = 'common/home';
$_['action_router']        = 'startup/router';
$_['action_error']         = 'error/not_found';
$_['action_pre_action']    = array();
$_['action_event']         = array();
$_['action_cron']          = array();
