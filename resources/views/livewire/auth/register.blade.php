@extends('components.layouts.app')

@section('slot')
    <div>
        <div class="max-w-[51rem] mx-auto mt-[2rem] sm:mt-[5em] px-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="text-[3rem] md:text-[7em] text-primary text-center">THE TOMATO GAME</h1>
                <div class="mt-5">
                    <label class="text-primary text-[1.875rem] font-normal">Name</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus
                        autocomplete="name"
                        class="bg-transparent text-primary outline-0 px-4 h-16 border-[4px] focus:outline-0 focus:ring-0 focus:border-[#ffefac] border-primary  w-full" />
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label class="text-primary text-[1.875rem] font-normal">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required
                        autocomplete="username"
                        class="bg-transparent text-primary outline-0 px-4 h-16 border-[4px] focus:outline-0 focus:ring-0 focus:border-[#ffefac] border-primary  w-full" />
                    @error('email')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label class="text-primary text-[1.875rem] font-normal">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password"
                        class="bg-transparent outline-0 text-primary px-4 h-16 border-[4px] focus:outline-0 focus:ring-0 focus:border-[#ffefac] border-primary  w-full" />
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-5">
                    <label class="text-primary text-[1.875rem] font-normal">Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password"
                        class="bg-transparent outline-0 text-primary px-4 h-16 border-[4px] focus:outline-0 focus:ring-0 focus:border-[#ffefac] border-primary  w-full" />

                    @error('password_confirmation')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-12 mb-12">
                    <button type="submit"
                        class="bg-[#FF3131] outline-0 text-[1.5rem] hover:bg-[#ff4646] active:bg-[#FF3131] text-primary px-4 h-16 border-[4px] focus:outline-0 focus:ring-0  border-primary  w-full">
                        Sign Up
                    </button>

                    <a href="{{ route('login') }}" class="cursor-pointer">
                        <label class="text-primary text-[1.5rem] font-normal cursor-pointer">Don you have an account
                            ?</label>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
