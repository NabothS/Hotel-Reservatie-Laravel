<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacteer ons') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl w-1/2 mx-auto sm:px-6 lg:px-8 text-center">
            <div class="flex items-center justify-center bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <label>Naam</label>
                        <input class=" block mt-1 mb-2.5 w-60" type="text">
                        <label>Email</label>
                        <input class=" block mt-1 mb-2.5 w-60" type="email">
                        <label>Mededeling</label>
                        <textarea class="block mt-1 mb-2.5 w-60"></textarea>
                        <button type="submit" class="bg-zinc-300 p-3.5 w-60">Verstuur</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
