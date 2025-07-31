<nav>
    <span style="margin:8px">
        <a href="{{ route('admin.index') }}">Dashboard</a>
    </span>
    <span style="margin:8px">
        <a href="{{ route('appointments.index') }}">Appointment</a>
    </span>
    <span style="margin:8px">
        <a href="{{ route('patients.index') }}">Patients</a>
    </span>
    <span style="margin:8px">
        <a href="{{ route('patients.index') }}">Doctors</a>
    </span>
    <span style="margin:8px">
        <a href="{{ route('hospitals.index') }}">Hospitals</a>
    </span>
    <span>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </span>
</nav>
