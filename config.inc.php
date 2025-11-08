<?php
/* phpMyAdmin configuration */
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['host'] = 'phpmyadmin-production-3817.up.railway.app';
$cfg['Servers'][$i]['port'] = '3000';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'admin';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;
$cfg['Servers'][$i]['AllowRoot'] = true;
$cfg['Servers'][$i]['verbose'] = 'Railway MySQL';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['nopassword'] = false;

$cfg['blowfish_secret'] = 'fgfgdgdfgdfgdfg';
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
?>
