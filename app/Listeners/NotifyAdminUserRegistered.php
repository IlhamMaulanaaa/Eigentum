<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Models\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\UserRegisteredNotification;
use Illuminate\Support\Facades\Notification;

class NotifyAdminUserRegistered implements ShouldQueue
{
    public function handle(UserRegistered $event)
    {
        // $admin = User::where('role', 'admin')->first();
        // if ($admin) {
        //     $admin->notify(new UserRegisteredNotification($event->user));
        // }
        $admin = User::where('role', 'admin')->get();
        Notification::send($admin, new UserRegisteredNotification($event->name));
        $admin->notify(new UserRegisteredNotification($event->name));
    }
}

