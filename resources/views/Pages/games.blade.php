@extends('layouts.app')

@section('content')
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="width: 1200px">

                    <div class="grid grid-cols-4 ">
                        @foreach($games->chunk(2) as $i => $weekGames)
                            <span class="px-6 py-4">
                                <span class="bg-black p-2 d-block">
                                    <b>Week {{$i + 1}}</b>
                                </span>
                                @foreach($weekGames as $game)
                                    <span class="d-block p-2">
                                        {{$game->team1->name}} - {{$game->team2->name}}
                                    </span>
                                @endforeach
                            </span>
                        @endforeach
                    </div>
                    <form method="post" action="{{route('games.generate_results')}}" class="px-6 py-4">
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Start simulation">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
