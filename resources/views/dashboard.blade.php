@extends('layout.app')

@section('content')
<div>
    <!-- We must ship. - Taylor Otwell -->
    <h1 class="text-4xl font-bold text-red-700 mb-4">Dashboard</h1>
    <p class="mt-4">Welcome {{$user->name}} to your dashboard!</p>
    {{-- <a href="{{ route('products.index') }}">Show Products</a> --}}
    <button class="mt-4" onclick="location.href='{{ route('customers.index') }}'">Show Customers</button>
    <form method="POST" action={{ route('auth.logout') }}>
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
@endsection