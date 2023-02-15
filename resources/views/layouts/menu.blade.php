@if(Auth::user()->level=='admin')
<li class="nav-item">
    <a href="/dashboard" class="nav-link">
        <i class="fa fa-home nav-icon"></i>
        <p>Dahsboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="/employee" class="nav-link">
        <i class="fa fa-users nav-icon"></i>
        <p>Employee</p>
    </a>
</li>

<li class="nav-item">
    <a href="/religion" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Religion</p>
    </a>
</li>

<li class="nav-item">
    <a href="/index.html" class="nav-link">
        <i class="far fa-user nav-icon"></i>
        <p>Personal Data</p>
    </a>
</li>
@else
<li class="nav-item">
    <a href="/dashboard" class="nav-link">
        <i class="fa fa-home nav-icon"></i>
        <p>Dahsboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="index.html" class="nav-link">
        <i class="far fa-user nav-icon"></i>
        <p>Personal Data</p>
    </a>
</li>

@endif