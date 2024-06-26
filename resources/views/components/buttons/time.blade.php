<button
    class="flex items-center p-2 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-gray"
    wire:click="$emit('changeVendorTiming', {{ $model->id }} ) " title="{{ __('Edit Open/close time') }}">
    <x-heroicon-o-clock class="w-5 h-5" />
    {{ $slot ?? '' }}
</button>
