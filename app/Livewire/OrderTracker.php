<?php

namespace App\Livewire;

use app\Models\Order;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;
use App\Events\OrderShipped;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class OrderTracker extends Component
{
    use LivewireAlert;

    public $toggleSwitch = false;

    public function updatedToggleSwitch($value)
    {
        broadcast(new OrderShipped($this->toggleSwitch))->toOthers();
    }

    #[On('echo:switch,OrderShipped')]
    public function registerOrderShipped($payload)
    {
        $this->toggleSwitch = $payload['toggleSwitch'];

        if ($this->toggleSwitch) {
            $this->alert('success', 'open');
        } else {
            $this->alert('error', 'close');
        }
    }

    public function render()
    {
        debug('render');
        return view('livewire.order-tracker');
    }
}
