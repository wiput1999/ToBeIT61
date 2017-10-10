<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

/*
 * Storage symlink directory creation command
 */
Artisan::command('storage:link-windows', function () {
    exec('mklink /D public\storage ..\storage\app\public');
})->describe('Windows symlink');

Artisan::command('storage:link-docker', function () {
    exec('ln -sr storage/app/public public/storage');
})->describe('Display an inspiring quote');
