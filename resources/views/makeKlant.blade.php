<?php



?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klanten') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route("addKlant") }}" class="flex flex-col">
                    @csrf
                    @method("POST")
                    <label class="p-3">Title</label>
                    <select name="title" class="block mt-1 mb-2.5 m-6 mt-2 mb-5">
                        <option value="Mr.">
                            Mr.
                        </option>
                        <option value="Mrs.">
                            Mrs.
                        </option>
                        <option value="Miss.">
                            Miss.
                        </option>
                        <option value="Prof.">
                            Prof.
                        </option>
                        <option value="Dr.">
                            Dr.
                        </option>
                    </select>
                    <label class="p-3">{{ __('First name') }}</label>
                    <input name="firstName" class=" block mt-1 mb-2.5 m-6 mt-4 mb-5" type="text">
                    <label class="p-3">{{ __('Last name') }}</label>
                    <input name="lastName" class=" block mt-1 mb-2.5  m-6 mt-4 mb-5" type="text">
                    <label class="p-3">{{ __('Email') }}</label>
                    <input name="email" class=" block mt-1 mb-2.5 m-6 mt-4 mb-5" type="email">
                    <label class="p-3">{{ __('Street') }}</label>
                    <input name="street" class=" block mt-1 mb-2.5 m-6 mt-4 mb-5" type="text">
                    <label class="p-3">{{ __('Zip') }}</label>
                    <input name="zip" class=" block mt-1 mb-2.5 m-6 mt-4 mb-5" type="text">
                    <label class="p-3">{{ __('City') }}</label>
                    <input name="city" class=" block mt-1 mb-2.5 m-6 mt-4 mb-5" type="text">
                    <label class="p-3">{{ __('Province') }}</label>
                    <input name="province" class=" block mt-1 mb-2.5 m-6 mt-4 mb-5" type="text">
                    <button type="submit" class="bg-zinc-300 p-3.5">Verstuur</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
