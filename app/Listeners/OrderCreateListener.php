<?php declare(strict_types=1);

namespace App\Listeners;

use App\Events\OrderCreated;

/**
 * Class OrderCreatedListener
 * @package App\Listeners
 */
class OrderCreateListener
{
    public function __construct()
    {
        dd(__FILE__ . ':' . __LINE__);///@TODO Don't forget to remove.
    }

    /**
     * @param OrderCreated $event
     * @throws \Throwable
     */
    public function handle(OrderCreated $event)
    {
        dd(__FILE__ . ':' . __LINE__);///@TODO Don't forget to remove.
//        $order = $event->order;
//        $store = $event->order->store;
//
//        if ($order->type === Order::ENUM_DELIVERY && $store->isStuartActivated()) {
//            $stuartIntegration = StuartIntegration::where(['store_id' => $store->id])->firstOrFail();
//            (new Stuart($stuartIntegration))->validateJob($store, $order);
//        }
    }
}
