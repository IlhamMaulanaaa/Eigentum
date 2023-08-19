<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;

class UserRegisteredNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        // 
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'message' => 'Pengguna baru telah terdaftar: ' . $this->user->name,
            // Anda bisa menambahkan lebih banyak data yang ingin ditampilkan
        ]);
    }

    public function toArray($notifiable)
    {
        return [
            'name' => 'Pengguna baru telah terdaftar: ' . $this->user->name,
            // Anda bisa menambahkan lebih banyak data yang ingin ditampilkan
        ];
    }
    
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }
    

}

