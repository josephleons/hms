<h4>Login</h4>
<div class="login">
    <form action="{{route('auth.store')}}" method="POST">
        @csrf
        <label for='username'>Username</label>
        <input type="text" name="username" placeholder="Username Credentials"><br>
        
        <label for='username'>Password</label>
        <input type="password" name="password" placeholder="Password Credentials"><br>
            @error('username')
                {{$message}}
            @enderror
        <br>
        <button type="submit" name="submit">Sign In</button>
    </form>
</div>