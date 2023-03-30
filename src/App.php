<?php

namespace App;

use Carbon\Carbon;
use App\controllers\HomeController;
use PHPMailer\PHPMailer\PHPMailer;

class App
{
    public function __construct()
    {
        echo 'App Source <br/>';
        $home = new HomeController();
        $now = Carbon::now();
        $mail = new PHPMailer(true);
        var_dump($mail);
    }
}