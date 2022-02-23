<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MyEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

  public $id;
  public $name;
  public $refer_id;
  public $img;

  public function __construct($id,$name,$img,$refer_id)
  {
      $this->name = $name;
      $this->id = $id;
      $this->refer_id = $refer_id;
      $this->img = $img;
      
  }

  public function broadcastOn()
  {
      return ['Agent_noti-development'];
  }

  public function broadcastAs()
  {
      return 'Notification';
  }
}
