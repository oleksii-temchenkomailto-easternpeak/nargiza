<?php declare(strict_types=1);

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

/**
 * Class OrderCreated
 * @package App\Events
 */
class OrderCreate
{
    use Dispatchable;

    /**
     * OrderCreated constructor.
     * @param Order $order
     */
    public function __construct()
    {
    }
}
