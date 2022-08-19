<x-layout>
    <div class="bg-white rounded-md my-6 px-6 py-6">
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
                        data: [4, 10, 5, 2, 20, 30, 23, 45, 12, 4, 5, 6],
                    },
                    {
                        label: 'This year orders',
                        backgroundColor: 'lightgreen',
                        data: [10, 20, 15, 5, 10, 20, 45, 23, 43, 5, 32, 8],
                    }
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {}
            };

            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>
    @endpush
</x-layout>
