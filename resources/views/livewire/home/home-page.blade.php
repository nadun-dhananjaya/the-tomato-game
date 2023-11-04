<div class="flex items-center justify-center w-full h-full ">
    <div class="max-w-[51rem] min-w-[18rem]  w-full mx-auto px-4 ">
        <h2 class="text-[2rem] md:text-[3em] text-primary text-center uppercase">Welcome Rio</h2>
        <h1 class="text-[3rem] md:text-[7em] text-primary text-center uppercase">THE TOMATO GAME</h1>

        <div class="mt-5">
            <a href="{{ route('game-pad') }}">
                <button type="button"
                    class="bg-[#FF3131] outline-0 tracking-[0.2rem] text-[1.5rem] hover:bg-[#ff4646] active:bg-[#FF3131] text-primary px-4 py-3 sm:py-4 border-[4px] focus:outline-0 focus:ring-0  border-primary  w-full">
                    Play
                </button>
            </a>

        </div>
        <div class="mt-5 mb-12">
            <a href="{{ route('score-board') }}">
                <button type="button" wire:navigate()
                    class="bg-[#FF3131] outline-0 tracking-[0.2rem]  text-[1.5rem] hover:bg-[#ff4646] active:bg-[#FF3131] text-primary px-4 py-3 sm:py-4 border-[4px] focus:outline-0 focus:ring-0  border-primary  w-full">
                    Score Board
                </button>
            </a>

        </div>
    </div>
</div>
