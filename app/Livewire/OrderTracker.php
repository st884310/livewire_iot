<?php

namespace App\Livewire;

use Livewire\Component;
use App\Events\OrderShipped;

class OrderTracker extends Component
{
    public function render()
    {
        return view('livewire.order-tracker');
    }
}
