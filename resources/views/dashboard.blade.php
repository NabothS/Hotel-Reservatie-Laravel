<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl mb-6">Hotel Roseval</h1>
                    <div class="flex justify-evenly">
                        <img class=" border-solid border-2 rounded-lg border-neutral-900" src="https://media.istockphoto.com/photos/modern-hotel-building-in-summer-picture-id187363337?k=20&m=187363337&s=612x612&w=0&h=JEz42xqKJMR_AmkHDHcxiy0ObZywn_Lc-UO8-W97t0Q=">
                        <p class="pl-6">
                            Hier in het Hotel Roseval is er geniet u van bijna geen tijdsverlies bij check-in, de reservaties lopen zelfs zo snel dat u zou denken dat dit geprogrammeerd is met Laravel ofzo.
                            Er zijn 20 kamers met inclusief een badkamer en nog meer. <br>
                            Kom nu naar ons hotel en geniet van een 50% korting voor 3 nachten. We verwelkom en iedereen die hier eens langskomt ofzo, ik weet niet meer wat er hier nog moet :}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
