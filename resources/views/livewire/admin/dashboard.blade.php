<section class="p-5">
    <section>
        <h1 class="text-3xl">Dashboard Statistics</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mt-4">
            <x-dashboard.stats-card title="Number Of Users" :value="$total_users" />
            <x-dashboard.stats-card title="Total Deposits" :value="$total_deposits" />
            <x-dashboard.stats-card title="Total Withdrawals" :value="$total_withdrawals" />
            <x-dashboard.stats-card title="Total Number of Plans" :value="$total_plans" />
        </div>
    </section>
</section>
