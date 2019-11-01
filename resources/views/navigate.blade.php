<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="{{URL::route('home')}}" id="home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::route('insert')}}" id="insert">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::route('edit')}}" id="edit">Edit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::route('delete')}}" id="delete">Delete</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL::route('show')}}" id="show">Show</a>
            </li>
        </ul>
    </div>
</nav>