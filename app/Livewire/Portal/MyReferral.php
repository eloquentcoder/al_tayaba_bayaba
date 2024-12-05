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
            'referrals.referrals.referrals.referrals', // Level 4
            'referrals.referrals.referrals.referrals.referrals', // Level 5
            'referrals.referrals.referrals.referrals.referrals.referrals', // Level 6
            'referrals.referrals.referrals.referrals.referrals.referrals.referrals', // Level 7
        ])->find(Auth::id());

        $level1 = $user->referrals; // 1st level
        $level2 = $user->referrals->flatMap->referrals; // 2nd level
        $level3 = $level2->flatMap->referrals; // 3rd level
        $level4 = $level3->flatMap->referrals; // 4th level
        $level5 = $level4->flatMap->referrals; // 4th level
        $level6 = $level5->flatMap->referrals; // 4th level
        $level7 = $level6->flatMap->referrals; // 4th level

          // Calculate subscription totals for each level
          $level1Total = $level1->sum(fn ($referral) => $referral->subscriptions->sum('amount'));
          $level2Total = $level2->sum(fn ($referral) => $referral->subscriptions->sum('amount'));
          $level3Total = $level3->sum(fn ($referral) => $referral->subscriptions->sum('amount'));
          $level4Total = $level4->sum(fn ($referral) => $referral->subscriptions->sum('amount'));
          $level5Total = $level5->sum(fn ($referral) => $referral->subscriptions->sum('amount'));
          $level6Total = $level6->sum(fn ($referral) => $referral->subscriptions->sum('amount'));
          $level7Total = $level7->sum(fn ($referral) => $referral->subscriptions->sum('amount'));


        return view('livewire.portal.my-referral', [
            'level_1_referrals' => $level1,
            'level_2_referrals' => $level2,
            'level_3_referrals' => $level3,
            'level_4_referrals' => $level4,
            'level_5_referrals' => $level5,
            'level_6_referrals' => $level6,
            'level_7_referrals' => $level7,
            'level_1_total' => $level1Total * 0.08,
            'level_2_total' => $level2Total * 0.03,
            'level_3_total' => $level3Total * 0.02,
            'level_4_total' => $level4Total * 0.015,
            'level_5_total' => $level5Total * 0.005,
            'level_6_total' => $level6Total * 0.005,
            'level_7_total' => $level7Total * 0.005,
        ]);
    }
}
