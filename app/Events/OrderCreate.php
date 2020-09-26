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

    public $data;

    /**
     * OrderCreate constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }
}
