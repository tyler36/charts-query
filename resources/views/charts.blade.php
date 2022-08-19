<x-layout>
    <div class="px-6 py-6 my-6 bg-white rounded-md">
        <h2 class="text-2xl font-semibold">Charts</h2>
        <div class="my-6">
            <div>Last year: {{ array_sum($lastYearOrders) }}</div>
            <div>This year: {{ array_sum($thisYearOrders) }}</div>
        </div>
        <canvas id="myChart"></canvas>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const labels = [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sept',
                'Oct',
                'Nov',
                'Dec',
            ];

            const data = {
                labels: labels,
                datasets: [{
                        label: 'Last year orders',
                        backgroundColor: 'lightgray',
                        data: {{ Js::from($lastYearOrders) }},
                    },
                    {
                        label: 'This year orders',
                        backgroundColor: 'lightgreen',
                        data: {{ Js::from($thisYearOrders) }},
                    }
                ]
            };

            const config = {
                type: 'bar',
                data: data
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endpush
</x-layout>
