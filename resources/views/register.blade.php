<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regtister</title>
</head>
<body>
    <div>
        
    <form action="{{route('register')}}" method="POST">
                @csrf
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" type="text" class="input" name="username">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" type="password" class="input" data-type="password" name="password">
              </div>
              <div class="group">
                <label for="pass" class="label">Repeat Password</label>
                <input id="pass" type="password" class="input" data-type="password" name="password_confirmation">
              </div>
              <div class="group">
                <label for="pass" class="label">Email Address</label>
                <input id="pass" type="text" class="input w-full rounded " name="email">
              </div>
              <div class="group">
                <button type="submit" class="button " value="Sign Up"> Submit </button>
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <a href="{{route('login')}}" class="p-3" >login</a>
    <a href="{{route('home')}}" class="p-3" >home</a>

</div>
</body>
</html>