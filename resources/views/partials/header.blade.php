<nav class="bg-primary">
   <div class="container">
    <div class="d-flex justify-content-between p-2 w-100">
        <h1 class="logo text-white ">
            CIAO.com
        </h1>
        <ul class="links d-flex text-white list-unstyled align-items-center m-0 p-0">
            @foreach ($data['route'] as $route)
            <li class="px-2"><a class="text-white" href="{{$route == 'home' ? route('index') : route($route)}}">{{$route}}</a></li>
                
            @endforeach

        </ul>
    </div>
   </div>
</nav>