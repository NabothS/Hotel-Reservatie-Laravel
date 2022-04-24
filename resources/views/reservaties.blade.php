<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page_title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="row">
                        <div class="medium-12 large-12 columns">
                          <h4 class="text-3xl mb-6">Reservaties</h4>
                          <table class="w-full mt-10">
                            <thead class="text-left">
                              <tr>
                                <th width="200">{{ __('Kamernummer') }}</th>
                                <th width="200">{{ __('Naam') }}</th>
                                <th width="200">{{ __('Tijd Reservatie') }}</th>
                                <th width="200">{{ __('Prijs') }}</th>
                                <th width="200">{{ __('Action') }}</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservaties as $reservatie)
                                    <tr class="mt-6">
                                        <td> {{ $reservatie->room->number .' - '. $reservatie->room->name}} </td>
                                        <td> {{ $reservatie->client->title . ' ' . $reservatie->client->firstName . ' ' . $reservatie->client->lastName}} </td>
                                        <td> {{ $reservatie->start_date . ' ' . $reservatie->end_date}} </td>
                                        <td> {{ '$ ' . $reservatie->price}} </td>

                                        <td>
                                            <a href="/deleteReservation/{{$reservatie->id}}" class="pl-3 pr-3  bg-blue-400 border-solid rounded-sm  border-2 border-neutral-900">{{ __('Delete') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- {{$klanten->links()}} --}}
                            </tbody>
                          </table>
                        </div>
                      </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
