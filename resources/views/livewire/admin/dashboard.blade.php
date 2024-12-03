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

    <section class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
        <div class="bg-white p-5 rounded-md">
            <h2 class="text-black">User Registrations Over Time</h2>
            <canvas id="userRegistrationsChart"></canvas>
        </div>

        <div class="bg-white p-5 rounded-md">
            <!-- Subscription Status Breakdown -->
            <h2 class="text-black">Subscription Status Breakdown</h2>
            <canvas id="subscriptionStatusChart"></canvas>
        </div>
        <!-- Withdrawal Status Counts -->

        <div class="bg-white p-5 rounded-md">
            <h2 class="text-black">Withdrawal Status Counts</h2>
            <canvas id="withdrawalStatusChart"></canvas>
        </div>

        <div class="bg-white p-5 rounded-md">
            <!-- Deposit Request Breakdown -->
            <h2 class="text-black">Deposit Request Breakdown</h2>
            <canvas id="depositStatusChart"></canvas>
        </div>

    </section>

</section>


<script>
    // User Registrations Over Time
    const userRegistrationsChartCtx = document.getElementById('userRegistrationsChart').getContext('2d');
    const userRegistrationsChart = new Chart(userRegistrationsChartCtx, {
        type: 'line',
        data: {
            labels: @json($userRegistrations->pluck('date')),
            datasets: [{
                label: 'User Registrations',
                data: @json($userRegistrations->pluck('count')),
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
            }]
        }
    });

    // Subscription Status Breakdown
    const subscriptionStatusChartCtx = document.getElementById('subscriptionStatusChart').getContext('2d');
    const subscriptionStatusChart = new Chart(subscriptionStatusChartCtx, {
        type: 'pie',
        data: {
            labels: @json($subscriptionStatuses->keys()),
            datasets: [{
                data: @json($subscriptionStatuses->values()),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
            }]
        }
    });

    // Withdrawal Status Counts
    const withdrawalStatusChartCtx = document.getElementById('withdrawalStatusChart').getContext('2d');
    const withdrawalStatusChart = new Chart(withdrawalStatusChartCtx, {
        type: 'bar',
        data: {
            labels: @json($withdrawalStatuses->keys()),
            datasets: [{
                label: 'Withdrawal Status',
                data: @json($withdrawalStatuses->values()),
                backgroundColor: '#36A2EB',
            }]
        }
    });

    // Deposit Request Breakdown
    const depositStatusChartCtx = document.getElementById('depositStatusChart').getContext('2d');
    const depositStatusChart = new Chart(depositStatusChartCtx, {
        type: 'doughnut',
        data: {
            labels: @json($depositStatuses->keys()),
            datasets: [{
                data: @json($depositStatuses->values()),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
            }]
        }
    });
</script>
