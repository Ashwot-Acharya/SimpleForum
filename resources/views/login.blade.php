<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
@section('nav')
  
@endsection    
<section  class="form">
   <form action="{{route('login')}}" method="POST">
       @csrf
       @if (session('status'))
            <div class=" text-white bg-red-500 w-full p-4 rounded-lg border-2">

                    {{session('status')}}   
                    </div>
             
            @endif
                       <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" class="input" name="username">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" data-type="password" name="password">
              </div>
              <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Keep me Signed in</label>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign In">
              </div>
             
            </div>
            </form>
            <!-- register -->
            <a href="{{route('register')}}" class="p-3" >Register</a>
            <a href="{{route('home')}}" class="p-3" >home</a>
      
    </section>
</body>
</html>