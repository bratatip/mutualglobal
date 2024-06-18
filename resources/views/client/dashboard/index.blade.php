@extends('client.layouts.app')

@section('content')
    <x-common.card>
        @slot('card_content')
            <div class="flex flex-col justify-center items-center h-screen">
                <div>
                    <h6 class="text-sm font-bold text-indigo-800">Client Dashboard</h6>
                </div>
                <x-loader.coming_soon />
            </div>
        @endslot
    </x-common.card>
@endsection
