<?php

namespace App\Livewire;

use Livewire\Component;
use App\Events\OrderShipped;

class OrderTracker extends Component
{
    public $toggleSwitch = true;
    public $title = 'open';

    public function updatedToggleSwitch($value)
    {
        $this->title = $value ? 'open' : 'close';
    }

    public function render()
    {
        return view('livewire.order-tracker');
    }
}
