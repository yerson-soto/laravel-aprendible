<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;
use App\Http\Requests\SaveMessageRequest;

class MessagesController extends Controller
{
    public function store(SaveMessageRequest $request)
    {
        $mail = $request->validated();
        Mail::to('yersonsoto84@gmail.com')->queue(new MessageReceived($mail));

        return back()->with('status', __('Hemos recibido tu mensaje. Te estaremos respondiendo en menos de 24 horas'));
    }
}
