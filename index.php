<?php
// eo_framework/index.php

$name = $_GET['name'] ?? 'the world';

header('Content-Type: text/html; charset=UTF-8');

printf('Hello %s', htmlspecialchars( mb_strtoupper($name), ENT_QUOTES, 'UTF-8'));
