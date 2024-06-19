@extends('client.layouts.app')

@section('content')
    <x-common.card>
        @slot('card_content')
            <div class="flex flex-col justify-center items-center h-[75vh]">
                <div>
                    <h6 class="text-2xl font-normal text-indigo-800" style="font-family: 'Helvetica Neue', 'Helvetica', Arial, 'Lucida Grande', sans-serif !important;">D  A  S  H  B  O  A  R  D</h6>

                </div>
                {{-- <x-loader.coming_soon /> --}}
            </div>
        @endslot
    </x-common.card>
@endsection
