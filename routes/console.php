<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('test', function () {
    $this->comment('wassup');
})->purpose('Salute yourself');
