@extends('frontend.layout.app')
@section('title', 'SimpleShop-HomePage')





@section('content')
    <div class="container">

        <h2 class="text-center my-4">laravel session</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>

        @endif

        @if (session('warning'))
            <div class="alert alert-warning">
                {{ session('warning') }}
            </div>

        @endif

        @if (count($allSessionData) > 0)
            @php
                $serial = 1;
            @endphp
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Session Key</th>
                        <th scope="col">Session Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allSessionData as $key => $value)
                        <tr>
                            <th scope="row">{{ $serial++ }}</th>
                            <td>{{ $key }}</td>
                            <td>{{ is_array($value) ? json_encode($value) : $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        @endif

    </div>

@endsection