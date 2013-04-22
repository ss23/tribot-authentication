<?php

if ($_GET['action'] == 'getbasicinfo') {
	echo 'ITEM' . base64_encode('#id=1#author=ss23#name=FakeAuthentication#price=0#vip=true#activated=false#usercount=1337#purchased=true#category=Pwning');
	die();
}

