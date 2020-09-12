<?php

declare(strict_types=1);

$cfg['blowfish_secret'] = 'isucon10-narusejun';

for ($i = 1; $i <= 3; $i++) {
	$cfg['Servers'][$i]['auth_type'] = 'config';
	$cfg['Servers'][$i]['host'] = 'tun_s' . $i;
	$cfg['Servers'][$i]['user'] = 'isucon';
	$cfg['Servers'][$i]['password'] = 'isucon';
	$cfg['Servers'][$i]['AllowNoPassword'] = true;
}

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
