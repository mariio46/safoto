<x-app-layout title="Login">
    <div class="mt-20">
        <div class="md:py-1">
            <div class="max-w-lg sm:rounded p-5 mx-auto border shadow-md my-20 bg-slate-800 bg-opacity-[0.10] ">
                <div class="text-center">
                    <img class="mx-auto w-48" src="{{ asset('../storage/image/default/Home-Login.png') }}"
                        alt="logo" />
                    <h4 class="mt-1 text-lg text-slate-700 font-semibold">
                        We are <span
                            class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Safoto
                        </span>Team.
                    </h4>
                </div>
                {{-- <x-login-failed></x-login-failed> --}}
                <x-login-failed />
                <form action="/auth/sign-In" method="post">
                    @csrf
                    {{-- Username --}}
                    <div class="w-full px-2 mb-4">
                        <label for="username" class="text-xs text-slate-600 font-bold">Username</label>
                        <input type="text" id="username" name="username"
                            class="w-full text-dark rounded-sm focus:outline-none focus:ring-1 focus:ring-slate-600 focus:border-slate-600 py-2 px-2 text-sm "
                            autofocus />
                        <x-validation-error name="username" />
                    </div>
                    {{-- Password --}}
                    <div class="w-full px-2 mb-4">
                        <label for="password" class="text-xs text-slate-600 font-bold">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full text-dark rounded-sm focus:outline-none focus:ring-1 focus:ring-slate-600 focus:border-slate-600 py-2 px-2 text-sm " />
                        <x-validation-error name="password" />
                    </div>
                    <div class="w-full px-2 flex justify-end">
                        <button
                            class="text-sm bg-clip-padding bg-gradient-to-r to-emerald-600 from-sky-400 px-7 py-2 font-bold text-white rounded-md sm:hover:scale-110 transition duration-300 ease-in-out"
                            type="submit">Sign-In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
