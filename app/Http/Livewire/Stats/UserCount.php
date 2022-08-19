<?php

namespace App\Http\Livewire\Stats;

use App\Models\User;
use Livewire\Component;

class UserCount extends Component
{
    public $userCount;
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
        return view('livewire.stats.user-count');
    }

    public function updateStats()
    {
        $this->userCount = User::where('created_at', '>=', now()->subDays($this->selectedDays))->count();
    }
}
