<x-app-layout>
    <div class="px-6 py-6 my-6 bg-white rounded-md">
        <h2 class="text-2xl font-semibold">Charts</h2>
        <livewire:chart-orders>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @endpush
</x-layout>
