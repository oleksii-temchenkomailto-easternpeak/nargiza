<?php declare(strict_types=1);

namespace App\Listeners;

use App\Events\OrderCreate;
use App\Jobs\SendOrderMail;

/**
 * Class OrderCreatedListener
 * @package App\Listeners
 */
class OrderCreateListener
{
    public function __construct()
    {
    }

    /**
     * @param OrderCreate $event
     * @throws \Throwable
     */
    public function handle(OrderCreate $event)
    {
        SendOrderMail::dispatch($event->data);
//        $order = $event->order;
//        $store = $event->order->store;
//
//        if ($order->type === Order::ENUM_DELIVERY && $store->isStuartActivated()) {
//            $stuartIntegration = StuartIntegration::where(['store_id' => $store->id])->firstOrFail();
//            (new Stuart($stuartIntegration))->validateJob($store, $order);
//        }
    }
}
