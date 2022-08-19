@props(['name','stat'])

<div class="px-4 py-6 bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between">
        <h4 class="font-medium text-gray-500">{{ $name }}</h4>
        <select
            wire:model="selectedDays"
            wire:change="updateStats"
            class="bg-gray-100 border"
            name="selectedDays"
            id="selectedDays"
        >
            <option value="30">30</option>
            <option value="60">60</option>
            <option value="90">90</option>
        </select>
    </div>
    <div class="text-3xl font-bold">{{ $stat }}</div>
</div>
