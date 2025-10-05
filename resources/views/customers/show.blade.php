<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <h1>Customer Details</h1>
    <div>
        <h2>{{ $customer->username }}</h2>
        <p>Email: {{ $customer->email }}</p>
        <p>First Name: {{ $customer->first_name }}</p>
        <p>Last Name: {{ $customer->last_name }}</p>
        <p>Date of Birth: {{ $customer->date_of_birth }}</p>
        <p>Phone: {{ $customer->phone_number }}</p>
        <p>Address: {{ $customer->address }}</p>
        <p>Created At: {{ $customer->created_at }}</p>
    </div>
    <form action={{ route('customers.destroy', $customer->id) }}
        method="POST"
        onsubmit="return confirm('Are you sure you want to delete this customer?');">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Customer</button>
    </form>
    <a href={{ route('customers.edit', $customer->id) }}>Edit Customer</a>
    <a href={{ route('customers.index') }}>Back to Customer List</a>
</div>