<div class="flex items-center justify-center min-h-screen">
    <label for="toggleSwitch" class="flex items-center cursor-pointer">
        <div class="relative">

            <input type="checkbox" id="toggleSwitch" class="sr-only"
                wire:model.change="toggleSwitch">

            <div class="block h-8 bg-gray-600 rounded-full w-14"></div>
            <div
                @class([
                    'absolute w-6 h-6 transition-transform duration-200 rounded-full left-1 top-1',
                    'translate-x-full bg-green-400' => $toggleSwitch,
                    'bg-white' => ! $toggleSwitch,
                ])
            >
            </div>
        </div>
    </label>
</div>
