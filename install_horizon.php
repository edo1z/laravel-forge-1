<?php
$env = $_ENV['APP_ENV'] ?? $_SERVER['APP_ENV'] ?? getenv('APP_ENV');
$installHorizon = $_ENV['INSTALL_HORIZON'] ?? $_SERVER['INSTALL_HORIZON'] ?? getenv('INSTALL_HORIZON');

// ログファイルのパスを指定
$logFile = __DIR__ . '/install_horizon.log';

// ログ出力関数
function logMessage($message) {
    global $logFile;
    file_put_contents($logFile, date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL, FILE_APPEND);
}

// 環境変数の値をログに出力
logMessage("APP_ENV: $env");
logMessage("INSTALL_HORIZON: $installHorizon");

if ($env === 'production' || $installHorizon === 'true') {
    $output = shell_exec('composer require laravel/horizon 2>&1');
    logMessage("Composer Output: $output");
}