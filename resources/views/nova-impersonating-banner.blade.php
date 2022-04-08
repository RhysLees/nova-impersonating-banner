<div>
    @if ($isImpersonating)
        <div class="items-center justify-center w-full p-2 text-center text-white bg-red-600 md:flex">
            <p class="text-lg">You are impersonating</p>

            <div class="flex-grow">
                <p class="text-sm">{{ $impersonating->id }} - {{ $impersonating->name }}</p>
                <p class="text-sm">{{ $impersonating->email }}</p>
            </div>

            <button wire:click="stopImpersonating" class="inline-flex items-center px-4 py-2 ml-auto text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">Stop Impersonating</button>
        </div>
    @endif
</div>
