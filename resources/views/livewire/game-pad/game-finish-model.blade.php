<div class="absolute top-0 left-0 bottom-0  w-full h-full bg-[#ff31318a]">
    <div class="flex items-center justify-center w-full h-full ">
        <div class="max-w-[51rem] min-w-[18rem] mx-auto  px-4 ">
            <h1 class="text-[2rem] md:text-[7em] text-primary text-center uppercase">GAME OVER !</h1>

            <h2 class="text-[1.5rem] md:text-[3em] text-primary text-center uppercase">SCORE 22</h2>

            <div class="mt-5">
                <a href="{{ route('game-pad') }}">
                    <button type="button"
                        class="bg-[#FF3131] outline-0 tracking-[0.2rem] text-[1.5rem] hover:bg-[#ff4646] active:bg-[#FF3131] text-primary px-4 py-3 sm:py-4 border-[4px] focus:outline-0 focus:ring-0  border-primary  w-full">
                        Replay
                    </button>
                </a>

            </div>
            <div class="mt-5">
                <a href="{{ route('home-page') }}">
                    <button type="button"
                        class="bg-[#FF3131] outline-0 tracking-[0.2rem] text-[1.5rem] hover:bg-[#ff4646] active:bg-[#FF3131] text-primary px-4 py-3 sm:py-4 border-[4px] focus:outline-0 focus:ring-0  border-primary  w-full">
                        Exit
                    </button>
                </a>
            </div>
        </div>
    </div>

</div>
