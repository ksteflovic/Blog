<nav class="navbar navbar-dark bg-dark">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
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
</nav>