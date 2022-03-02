<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
  

    <nav class="p-6 bg-slate-700  text-white flex justify-between mb-6 " >
        <ul class="flex items-center"> 
            <li> <a href="{{Route('home')}}" class="p-3" >Home</a> </li>
          


                 
        </ul>  
         <ul class="flex items-center"> 
             @if (auth()->user())
             <li> <a href="" class="p-3" >{{auth()->user()->username}}</a> </li>
             <li> 
            <form action="{{route('logout')}}" method="post" class="inline" >
                @csrf
            <button  >Logout</button>
            </form>     
            </li>       
             @else
             <li> <a href="{{route('register')}}" class="p-3" >Register</a> </li>
            <li> <a href="{{route('login')}}" class="p-3" >Login</a> </li>  
                 
             @endif
              
  
        </ul>  
    
    
    </nav>
<section class=" justify-center 
">
        <div class="outer-wrapper">
            
                <div clas="p-4 justify-center " >
                @if ($msg->count())
                    @foreach ( $msg as $msg )
                    {{ $msg -> name}}
                    <br>
                        {{$msg  -> message}}
                        <hr>
                    @endforeach 
                @else
                    There is nothing in this forum
                @endif
            </div>
                <div>
                    
                </div>
            </div>
            <div class="footer">
                <form action="{{route('message')}}" method="POST">
                    @csrf
                
                <div class="p-4" ><input type="text" placeholder="Type Your Message Here" class="w-full p-3 " name="msg"> </div>
               <div class="p-4" > <button class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"" >Send></button>
</div>
                </form>
                
            </div>
        </div>
    </section>

</body>
</html>