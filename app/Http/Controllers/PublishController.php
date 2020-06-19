<?php

namespace App\Http\Controllers;

use App\Mail\PublishMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublishController extends Controller
{
    public function publish(Request $request)
    {
        if($request->has('send') && $request->has('send'))
        {
            Mail::queue(new PublishMail());
        }

        return new PublishMail();
    }
}
