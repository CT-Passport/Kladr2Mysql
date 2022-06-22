<?php

include 'fias.php';
$dbconfig = ['host' => 'localhost', 'username' => 'jadmmin', 'password' => 'jadmin774', 'dbname' => 'joomla_db1'];
$fias = new fias(__DIR__.'/data/', $dbconfig);
//$fias->debug = true;
$fias->import();



ALTER TABLE `centerst` ADD PRIMARY KEY(`centerstid`); 
ALTER TABLE `eststat` ADD PRIMARY KEY(`eststatid`); 
ALTER TABLE `flattype` ADD PRIMARY KEY(`fltypeid`); 
ALTER TABLE `ndoctype` ADD PRIMARY KEY(`ndtypeid`); 
ALTER TABLE `nordoc` DROP PRIMARY KEY, ADD PRIMARY KEY(`normdocid`); 
ALTER TABLE `operstat` ADD PRIMARY KEY(`operstatid`); 
ALTER TABLE `roomtype` ADD PRIMARY KEY(`rmtypeid`); 
ALTER TABLE `strstat` ADD PRIMARY KEY(`strstatid`); 