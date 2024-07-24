<?php
echo "install_horizon.php started";
$env = $_ENV['APP_ENV'] ?? $_SERVER['APP_ENV'] ?? getenv('APP_ENV');
$installHorizon = $_ENV['INSTALL_HORIZON'] ?? $_SERVER['INSTALL_HORIZON'] ?? getenv('INSTALL_HORIZON');
echo "APP_ENV: $env";
echo "INSTALL_HORIZON: $installHorizon";
if ($env === 'production' || $installHorizon === 'true') {
    $output = shell_exec('composer require laravel/horizon 2>&1');
    echo "Composer Output: $output";
}