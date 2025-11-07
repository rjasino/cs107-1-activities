<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <div>
        <a href={{ route('customers.create') }}>Create New Customer</a>
    </div>
    @foreach($customers as $customer)
    <div>
        <h2><a href={{route('customers.show', $customer->id)}}>{{ $customer->user->name }}<a></h2>
        <p>Email: {{ $customer->user->email }}</p>
        <p>Phone: {{ $customer->phone_number }}</p>
        <p>Address: {{ $customer->address }}</p>
    </div>
    @endforeach
    <button onclick="location.href='{{ route('dashboard') }}'">Back to Dashboard</button>
        {{-- <button onclick="location.href='{{ route('customers.edit', $customer->id) }}'">Edit Customer</button> --}}
</div>