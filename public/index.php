<?php
declare(strict_types=1);

/**
 * Require the init config file
 */
require_once dirname(__DIR__) . '/config/init.php';

/**
 * Require the autoload file
 */
require_once ROOT_DIR . DS .'vendor'. DS .'autoload.php';

/**
 * Require the autoload file
 */
require_once ROOT_DIR . DS .'bootstrap'. DS .'Application.php';

Application::run();