@props(['title', 'min_amount', 'max_amount','min_interest_rate', ' max_interest_rate', 'description', 'to_purchase', 'to_delete', 'plan_id'])

<div class="rounded-md bg-white text-[#0f277e] p-5 text-center">
    <h1 class="font-bold text-4xl">{{ $title }}</h1>
    <p class="mn-2 text-2xl">${{ $min_amount }} - ${{ $max_amount }}</p>
    <div class="bg-[#0f277e] text-white rounded-md">{{$min_interest_rate}}% - {{ $max_interest_rate }}% every month</div>
    <p class="text-[#0f277e] mt-3 text-xs">Profit For Every Day</p>
    <div class="my-2">
        <span>{{ $description }}</span>
    </div>
    @if ($to_purchase)
        <a class="rounded-full text-white bg-[#0f277e] p-2 w-full flex justify-center items-center gap-1 mt-5">
            <span>Purchase Now</span>
        </a>
    @endif

    @if ($to_delete)
        {{-- <button wire:click="deletePlan({{ $planId }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-3">
            Delete Plan
        </button> --}}
        <button wire:click="updatePlan({{ $planId }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">
            Edit Plan
        </button>
    @endif



</div>
