<?php
if (getenv('APP_ENV') === 'production' || getenv('INSTALL_HORIZON') === 'true') {
    shell_exec('composer require laravel/horizon');
}