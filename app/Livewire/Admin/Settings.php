<?php

namespace App\Livewire\Admin;

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Settings extends Component
{
    public $withdrawal_day;
    public $settings = []; // Array to hold settings

    public function mount()
    {
        $this->settings = Setting::all()->pluck('value', 'key')->toArray();
        $this->withdrawal_day = $this->settings['withdrawal_day'] ?? null;
    }

    public function updateSettings()
    {
        $this->validate([
            'withdrawal_day' => 'required|numeric|max:31'
        ]);

        // Update or create the setting in the database
        \App\Models\Setting::updateOrCreate(
            ['key' => 'withdrawal_day'], // The condition to find the record
            ['value' => $this->withdrawal_day] // The value to update or create
        );

        // Optionally, send feedback to the user
        session()->flash('success', 'Settings updated successfully!');
    }

    #[Layout('components.layouts.admin-dashboard')]
    public function render()
    {
        return view('livewire.admin.settings');
    }
}
