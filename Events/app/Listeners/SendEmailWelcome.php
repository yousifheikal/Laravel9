<?php

namespace App\Listeners;

use App\Events\WelcomeUser;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailWelcome
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WelcomeUser $event): void
    {
        //
        Mail::to($event->user->email)->send(new \App\Mail\WelcomeUser($event->user));
        $user = User::find($event->user->id);
        $user->update([
           'status' => 1,
           'name' => 'Yousif',
        ]);
    }
}
