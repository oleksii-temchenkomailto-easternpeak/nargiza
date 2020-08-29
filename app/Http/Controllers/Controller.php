<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }
    public function contactForm()
    {
        return '{"into":"#wpcf7-f54-o3","status":"mail_sent","message":"\u0421\u043f\u0430\u0441\u0438\u0431\u043e \u0437\u0430 \u0412\u0430\u0448\u0435 \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435. \u041e\u043d\u043e \u0443\u0441\u043f\u0435\u0448\u043d\u043e \u043e\u0442\u043f\u0440\u0430\u0432\u043b\u0435\u043d\u043e."}';
    }

    public function admin()
    {



    }

    public function adminAjax()
    {

    }
}
