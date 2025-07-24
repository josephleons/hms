 <div class="card">
        <form action="{{route('users.store')}}" method="POST">
            @csrf
            <dv>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name">
            </dv>
            <br>
            <dv>
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
            <br>
            </dv>
            <dv>
                <label>Email</label>
                <input type="text" name="email" placeholder="email">
            <br>
            </dv>
            <dv>
                <label>Password</label>
                <input type="password" name="password" placeholder="password">
            <br>
            </dv>
          <button type="submit">Register</button>
        </form>
    </div>