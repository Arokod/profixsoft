<?php

namespace App\Http\Controllers;

use App\Notifications\NewQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function store()
    {
        $data = \request()->validate([
            'name' => ['required', 'string', 'min:3', 'max:32'],
            'email' => ['required', 'email'],
            'question' => ['required', 'string'],
        ]);

        Notification::route('mail', 'support@profixsoft.com')
            ->notify(new NewQuestion($data));

        return back();
    }
}
