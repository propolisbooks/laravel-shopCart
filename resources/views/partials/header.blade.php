<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Moj sajt</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Naslovna</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
 <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shop Cart</a></li>  


<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
User Account
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('user.signup')}}">Signup</a></li>
          <li><a href="{{ route('user.signin')}}">Signin</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>