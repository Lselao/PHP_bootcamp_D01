#!/usr/bin/php

<?php
$var = preg_replace("/\s+/", " ", $argv[1]);
$var = trim($var);
echo ($var);
?>