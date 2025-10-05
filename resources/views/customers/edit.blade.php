<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1>Update Customer Details</h1>
    <form action={{ route('customers.update', $customer->id) }} method="POST">
        @csrf
        @method('PUT')
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="{{ old('username', $customer->username) }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password_hash"
            value="{{ old('password_hash', $customer->password_hash) }}" required>
        <br>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $customer->first_name) }}"
            required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $customer->last_name) }}"
            required>
        <br>
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth"
            value="{{ old('date_of_birth', $customer->date_of_birth) }}">
        <br>
        <label for="phone_number">Phone:</label>
        <input type="text" id="phone_number" name="phone_number"
            value="{{ old('phone_number', $customer->phone_number) }}">
        <br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50">
            {{ old('address', $customer->address) }}
        </textarea>
        <br>
        <button type="submit">Update Customer Info</button>
    </form>
    <a href={{ route('customers.index') }}>Back to Customer List</a>
</div>