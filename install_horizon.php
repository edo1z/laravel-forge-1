<?php
echo "install_horizon.php started";
if ($env === 'production' || $installHorizon === 'true') {
    $output = shell_exec('composer require laravel/horizon 2>&1');
    echo "Composer Output: $output";
}