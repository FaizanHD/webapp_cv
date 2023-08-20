<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Check if the user is authenticated -->
    @auth
    <p>You are logged in</p>
    <div style="border: 3px solid black;">
        <form action="/create-post" method="post">
            @csrf
            <input type="text" name="title" placeholder="post title">
            <textarea name="body" placeholder="body content ..."></textarea>
            <button>Post the post</button>
        </form>
    </div>
    <form action="/logout" method="post">
        @csrf
        <button>Log out</button>
    </form>
    @else
    <div style="border: 3px solid black;"></div>
    <h2>Register</h2>
    <form action="/register" method="post">
        @csrf 
        <input name="name" type="text" placeholder="Name">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Password">
        <button>Register</button>
    </form>

    <div style="border: 3px solid black;"></div>
    <h2>Login</h2>
    <form action="/login" method="post">
        @csrf 
        <input name="loginemail" type="text" placeholder="Email">
        <input name="loginpassword" type="password" placeholder="Password">
        <button>Login</button>
    </form>
    @endauth
   
</body>
</html>
