<h4>Register User Account</h4>
<div class="login">
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <label for='name'>name</label>
        <input type="text" name="name" placeholder="Username Credentials"><br>

        <label for='username'>Username</label>
        <input type="text" name="username" placeholder="Username Credentials"><br>

        <label for='email'>email</label>
        <input type="text" name="email" placeholder="email address"><br>

        <label for='username'>contact</label>
        <input type="text" name="contact" placeholder="Enter contact"><br>

        <label for='password'>Password</label>
        <input type="password" name="password" placeholder="Password Credentials"><br>
        <input type="submit" name="submit">
    </form>
</div>