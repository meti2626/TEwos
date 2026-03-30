
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>
</head>
<body>

    @auth

{{-- if u are logged in --}}
     <p>Congrats you are logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>

    @else

         <div  style="border: 3px solid black;">
        <h2>Register</h2>
        <form action= "/register"  method = 'POST' >
             @csrf
            <input name="name" type="text" placeholder = "name">
            <input name="email" type="email" placeholder = "email">
            <input name="password" type="password" placeholder = "password">

            <button> Register</button>
     </form>


      </div>

    @endauth



</body>
</html>



