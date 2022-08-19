<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\View\View;
use Livewire\Component;

class ChartOrders extends Component
{
    public $thisYearOrders;
    public $lastYearOrders;
    public $selectedYear;

    /**
     * Constructor
     * @return void
     */
    public function mount()
    {
        $this->selectedYear = date('Y');
        $this->updateOrdersCount();
    }

    /**
     * Return HTML output
     *
     * @return View
     */
    public function render()
    {
        $availableYears = [
            date('Y'),
            date('Y') - 1 ,
            date('Y') - 2 ,
            date('Y') - 3,
        ];

        return view('livewire.chart-orders')
            ->with('availableYears', $availableYears);
    }

    /**
     * Query the database
     * @return void
     */
    public function updateOrdersCount()
    {
        $this->thisYearOrders = Order::getYearOrders($this->selectedYear)
            ->groupByMonth();

        $this->lastYearOrders = Order::getYearOrders($this->selectedYear -1 )
            ->groupByMonth();

        $this->emit('updateTheChart');
    }
}
