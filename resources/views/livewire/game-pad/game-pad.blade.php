<div class="relative w-full h-full">

    @if ($is_game_over == true)
        @include('livewire.game-pad.game-finish-model')
    @endif
    @if ($is_next_lap == true)
        @include('livewire.game-pad.game-lap-finish-model')
    @endif
    <div class="flex items-center justify-center w-full h-full ">
        <div class="max-w-[51rem] min-w-[18rem] mx-auto w-full flex flex-row flex-wrap px-4 ">
            <div class="w-1/2 ">
                <h2 class="text-[1.5rem] md:text-[3em] text-primary text-start uppercase">
                    SCORE : {{ $score }} {{ $solution }}
                </h2>
            </div>
            <div class="w-1/2">
                <h2 class="text-[1.5rem] md:text-[3em] text-primary text-end uppercase">
                    LAP : {{ $lap }}/3
                </h2>
            </div>
            <div class="w-full aspect-video">
                <img src="{{ $question }}" class="object-cover w-full" />
            </div>
            <div class="flex flex-row w-full gap-2 ">
                <div class="w-4/6 ">
                    <input type="text" wire:model="user_solution"
                        class="bg-transparent outline-0 text-[1.5rem]  text-primary px-4 h-16 border-[4px] focus:outline-0 focus:ring-0 focus:border-[#ffefac] border-primary  w-full" />
                </div>
                <div class="w-2/6 ">
                    <button type="button" wire:click="checkAnswer"
                        class="bg-[#FF3131] outline-0 text-[1.5rem] hover:bg-[#ff4646] active:bg-[#FF3131] text-primary px-4 h-16 border-[4px] focus:outline-0 focus:ring-0  border-primary  w-full">
                        Check
                    </button>
                </div>
            </div>
            <div class="w-full ">
                <label class="text-[1.5rem] break-all  text-primary text-start ">
                    {{ $error_message }}
                </label>
            </div>
        </div>
    </div>

</div>
@push('scripts')
    <script>
        document.addEventListener('livewire:initialized', () => {
            @this.on('tomato-loaded', (event) => {
                console.log(event);
                $('#loading').show();
            })
        });
    </script>
@endpush
