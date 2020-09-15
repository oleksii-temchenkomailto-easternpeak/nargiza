<?php declare(strict_types=1);

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

/**
 * Class OrderCreated
 * @package App\Events
 */
class OrderCreated
{
    use Dispatchable;

    /**
     * OrderCreated constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
