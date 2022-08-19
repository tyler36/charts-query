<?php

namespace App\Http\Livewire\Stats;

use App\Models\Order;
use Livewire\Component;

class OrderCount extends Component
{
    public $orderCount;
    public $selectedDays;

    /**
     * Constructor
     * @return void
     */
    public function mount()
    {
        $this->selectedDays = 30;
        $this->updateStats();
    }


    /**
     * Return HTML output
     *
     * @return View
     */
    public function render()
    {
        return view('livewire.stats.order-count');
    }

    public function updateStats()
    {
        $this->orderCount = Order::where('created_at', '>=', now()->subDays($this->selectedDays))->count();
    }
}
