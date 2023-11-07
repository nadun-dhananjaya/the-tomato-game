<div class="flex items-start justify-center w-full h-full ">
    <div class="max-w-[51rem] min-w-[18rem] mx-auto  px-4 w-full mt-10 ">
        <h1 class="text-[3rem] md:text-[5rem] text-primary text-center uppercase">THE TOMATO GAME</h1>
        <h2 class="text-[1.5rem] md:text-[2rem] text-primary text-center uppercase">Score Board</h2>

        <div class="flex flex-row flex-wrap w-full mx-auto mt-10 mb-12">
            <div class="w-full">
                <table class="w-full text-primary text-[1.2rem] md:text-[1.8rem]">
                    @foreach ($scores as $score)
                        <tr class="w-full bg-[#FF3131] border-4 border-primary ">
                            <td class="w-20 px-2 py-6 text-center border-r-4 border-r-primary"> {{ $loop->iteration }}
                            </td>
                            <td class="px-4">{{ $score->name }}</td>
                            <td class="w-20 px-2 text-center border-l-4 border-l-primary">{{ $score->highest_score }}
                            </td>
                        </tr>
                        <tr class="h-4"></tr>
                    @endforeach


                </table>
            </div>
        </div>
    </div>
</div>
