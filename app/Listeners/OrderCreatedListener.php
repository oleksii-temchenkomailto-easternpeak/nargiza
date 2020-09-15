<?php declare(strict_types=1);

namespace App\Listeners;

use App\Events\OrderCreated;

/**
 * Class OrderCreatedListener
 * @package App\Listeners
 */
class OrderCreatedListener
{
    /**
     * @param OrderCreated $event
     * @throws \Throwable
     */
    public function handle(OrderCreated $event)
    {
//        $order = $event->order;
//        $store = $event->order->store;
//
//        if ($order->type === Order::ENUM_DELIVERY && $store->isStuartActivated()) {
//            $stuartIntegration = StuartIntegration::where(['store_id' => $store->id])->firstOrFail();
//            (new Stuart($stuartIntegration))->validateJob($store, $order);
//        }
    }
}
