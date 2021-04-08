<?php
// eo_framework/index.php

require_once __DIR__.'/../init.php';

$name = $request->get('name', 'testNewName');

$response->setContent(
    sprintf('Welcome %s, to eo-Barebone-Framework', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'))
);
$response->send();
