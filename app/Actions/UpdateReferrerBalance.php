<?php

namespace App\Actions;

use App\Models\User;

class UpdateReferrerBalance 
{
    public function updateBalance($child_id, $amount)
    {
        // Define the bonus percentages for each level
        $bonusPercentages = [
            1 => 0.08,  // 8% for 1st level
            2 => 0.03,  // 3% for 2nd level
            3 => 0.02,  // 2% for 3rd level
            4 => 0.015, // 1.5% for 4th level
            5 => 0.05, // 0.5% for 5th level
            6 => 0.05, // 0.5% for 6th level
            7 => 0.05, // 0.5% for 7th level
        ];

        $currentUserId = $child_id;

        // Loop through 4 levels of referrers
        for ($level = 1; $level <= 7; $level++) {
            // Get the current user's referrer
            $user = User::find($currentUserId);
            if (!$user || !$user->parent_id) {
                // Stop if no more referrers are found
                break;
            }

            $referrer = User::with('balance')->find($user->parent_id);
            if ($referrer) {
                // Calculate the bonus for the current level
                $bonus = $amount * $bonusPercentages[$level];

                // Update the referrer's balance
                $referrer->balance()->increment('emr_share_balance', $bonus);

                // Log or notify (optional)
                // Log::info("User ID: {$referrer->id} received a bonus of {$bonus} for Level {$level}");

                // Prepare for the next level
                $currentUserId = $referrer->id;
            } else {
                break;
            }
        }
    }
}
