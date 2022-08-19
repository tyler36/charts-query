<?php

namespace App\Http\Livewire\Stats;

use App\Models\Order;
use Livewire\Component;

class Revenue extends Component
{
    public $revenue;
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
        return view('livewire.stats.revenue');
    }

    public function updateStats()
    {
        $this->revenue = Order::where('created_at', '>=', now()->subDays($this->selectedDays))->sum('total');
    }
}
