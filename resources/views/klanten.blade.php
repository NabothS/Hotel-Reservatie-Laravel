<?php

 //PAGINATIE WERKT NIET, IK DENK DOOR TAILWIND MISSCHIEN

?>

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
                          <h4 class="text-3xl mb-6">Klanten</h4>
                          <div class="medium-6 columns">
                            <a href="{{ route("makeKlant") }}" class="p-6 bg-zinc-300 p-3.5 m-6 mb-10">Voeg klant toe</a>
                          </div>
                          <table class="w-full mt-10">
                            <thead class="text-left">
                              <tr>
                                <th width="200">{{ __('Name') }}</th>
                                <th width="200">{{ __('Email') }}</th>
                                <th width="200">{{ __('Action') }}</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($klanten as $klant)
                                    <tr class="mt-6">
                                        <td> {{ $klant->title .' '. $klant->firstName .' '. $klant->lastName }} </td>
                                        <td> {{ $klant->email }} </td>
                                        <td>
                                            <a href="/bewerkKlant/{{$klant->id}}" class="pl-3 pr-3 bg-amber-200 border-solid rounded-sm  border-2 border-neutral-900">{{ __('Edit') }}</a>
                                            <a href="/bookRoom/{{$klant->id}}" class="pl-3 pr-3  bg-blue-400 border-solid rounded-sm  border-2 border-neutral-900">{{ __('Book a room') }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{$klanten->links()}}
                            </tbody>
                          </table>
                        </div>
                      </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
