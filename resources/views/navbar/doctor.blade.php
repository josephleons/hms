<nav>
    <span>
        <ul>
            <li>
                <a href="{{ route('doctors.index') }}">Dashboard</a>
            </li>
            <li>
                <a href="/appointment">Appointment</a>
            </li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            </li>
    </span>
</nav>
