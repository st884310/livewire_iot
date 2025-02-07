<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;
use App\Events\OrderShipped;

class OrderTracker extends Component
{
    public $toggleSwitch = false;

    public function updatedToggleSwitch($value)
    {
        broadcast(new OrderShipped($this->toggleSwitch))->toOthers();
    }

    #[On('echo:switch,OrderShipped')]
    public function registerOrderShipped($payload)
    {
        $this->toggleSwitch = $payload['toggleSwitch'];
    }

    public function render()
    {
        return view('livewire.order-tracker');
    }
}
