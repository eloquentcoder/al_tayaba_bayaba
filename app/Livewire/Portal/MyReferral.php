<?php

namespace App\Livewire\Portal;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class MyReferral extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        $user = User::with([
            'referrals',                    // Level 1
            'referrals.referrals',          // Level 2
            'referrals.referrals.referrals', // Level 3
            'referrals.referrals.referrals.referrals' // Level 4
        ])->find(Auth::id());

        $level1 = $user->referrals; // 1st level
        $level2 = $user->referrals->flatMap->referrals; // 2nd level
        $level3 = $level2->flatMap->referrals; // 3rd level
        $level4 = $level3->flatMap->referrals; // 4th level


        return view('livewire.portal.my-referral', [
            'level_1_referrals' => $level1,
            'level_2_referrals' => $level2,
            'level_3_referrals' => $level3,
            'level_4_referrals' => $level4,
            
        ]);
    }
}
