<form class="__form-login-admin__" action="/admin/projects" method="post">

        @csrf

     <h3>Login</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <input type="hidden" value="{{}}">

        <input type="submit" class="form-submit" value="Submit">

</form>