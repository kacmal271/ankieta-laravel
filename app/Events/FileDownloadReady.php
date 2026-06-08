<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FileDownloadReady implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;
    
  /**
   * __construct
   *
   * @return void
   */
  
  public function __construct(
    public int $userId,
    public string $downloadLink
  )
  {
    
  }
    
  /**
   * broadcastOn
   *
   * @return array
   */

  public function broadcastOn(): array
  {
    return [
      new Channel("file.{$this->userId}"),
    ];
  }
    
  /**
   * broadcastAs
   *
   * @return string
   */

  public function broadcastAs(): string
  {
    return 'FileDownloadReady';
  }
}
