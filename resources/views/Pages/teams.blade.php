@extends('layouts.app')


@section('content')

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="width: 720px">

                    <h2 class="px-6">
                        Tournament teams
                    </h2>

                    <div class="px-6 py-4 bg-black">
                        <b>Team name</b>
                    </div>

                    <div class="grid grid-cols-1">
                        @foreach($teams as $team)
                            <div class="p-6 py-4">
                                {{$team->name}}
                            </div>
                        @endforeach
                    </div>

                    <form method="post" action="{{route('games.generate')}}" class="px-6 py-4">
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Generate Fixtures">
                    </form>

                </div>
            </div>
        </div>
    </div>



@endsection
