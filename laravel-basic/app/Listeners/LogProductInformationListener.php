<?php

namespace App\Listeners;

use App\Events\ProductAddedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\support\Facades\Log;

class LogProductInformationListener
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
    public function handle(ProductAddedEvent $event): void
    {
        Log::info('新商品が追加されました:',['product' => $event->product]);
    }
}
