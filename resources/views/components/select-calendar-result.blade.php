<div class="flex rounded-md relative">
    <div class="flex">
        <div class="px-2 py-3">
            <div class="h-5 w-5">
                <div
                    class="h-full w-full rounded-full overflow-hidden shadow object-cover"
                    style="background-color: {{ $color }}" ></div>
            </div>
        </div>

        <div class="flex flex-col justify-center pl-3 py-2">
            <p class="text-sm font-bold pb-1">{{ $type }}</p>
            <div class="flex flex-col items-start">
                <p class="text-xs leading-5">{{ $description }}</p>
            </div>
        </div>
    </div>
</div>
