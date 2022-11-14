<h1> User Login </h1>

<li class="nav-item" >
    <a class="nav-link" href="{{route('logout')}}"
       onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
        <i class="fa fas-solid fa-arrow-down-left">
            {{__('Logout')}}</i>
    </a>
    <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none" >
        @csrf

    </form>

</li>
