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
                <form method="POST" action="{{ route("bookRoom") }}" class="flex flex-col">
                    @csrf
                    @method("POST")
                    <input name='client_id' hidden value="{{$client->id}}">
                    <label class="p-3">Room</label>
                    <select name="room_id" class="block mt-1 mb-2.5 m-6 mt-2 mb-5">
                        @foreach ($rooms as $room)
                            @if ($room->available == 1)
                                <option value="{{$room->id . '-' . $room->price}}">
                                    {{$room->number .' '. $room->name .' $' . $room->price .'.00'}}
                                </option>
                            @else
                                <option disabled value="{{$room->id}}">
                                    {{$room->number .' '. $room->name . ' Already reserved'}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    <label class="p-3">{{ __("Start date")}}</label>
                    <input name="startdate" type="date" class="block mt-1 mb-2.5 m-6 mt-2 mb-5">
                    <label class="p-3" >{{ __("End date")}}</label>
                    <input name="enddate" type="date" class="block mt-1 mb-2.5 m-6 mt-2 mb-5">
                    <label class="p-3" >{{ __("Remarks")}}</label>
                    <textarea name="remarks" class="block mt-1 mb-2.5 m-6 mt-2 mb-5"></textarea>
                    <button type="submit" class="bg-zinc-300 p-3.5">Reserveer</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
