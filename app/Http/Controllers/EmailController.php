<?php

namespace ComercEnergia\Http\Controllers;

use Illuminate\Http\Request;
use ComercEnergia\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendEmail()
    {
        dispatch(new SendEmailJob())->delay(now()->addMinutes(1));

        echo 'email sent';
    }
}
