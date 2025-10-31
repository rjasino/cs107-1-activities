<div>
    <!-- We must ship. - Taylor Otwell -->
    <h1>Dashboard</h1>
    <p>Welcome {{$user->name}} to your dashboard!</p>
    <form method="POST" action={{ route('auth.logout') }}>
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>