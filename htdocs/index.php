<?php
define('_ROOT_DIR', __DIR__ . '/');
require_once _ROOT_DIR . '../final/init.php';
$controller = new SiteController();
$controller->run();
exit;