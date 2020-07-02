@extends('layouts.base')

@section('body-class', 'bg-gray-100')

@section('body')
    @include('components.navbar')
    <main>
        <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
          @yield('content')
        </div>
      </main>
@endsection
