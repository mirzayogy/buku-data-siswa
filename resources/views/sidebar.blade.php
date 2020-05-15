<div class="sidebar">
    <ul class="navbar-nav">
        <li class="nav-item">
            @if(empty($halaman))
            <a href="{{url('/')}}" class="nav-link px-2 active"><i class="material-icons icon">home</i>
                @else
                <a href="{{url('/')}}" class="nav-link px-2"><i class="material-icons icon">home</i>
                    @endif
                    <span class="text">Home</span></a>
        </li>
        <li class="nav-item">
            @if(!empty($halaman) && $halaman == 'siswa' )
            <a href="{{url('siswa')}}" class="nav-link px-2 active"><i class="material-icons icon">person</i>
                @else
                <a href="{{url('siswa')}}" class="nav-link px-2"><i class="material-icons icon">person</i>
                    @endif
                    <span class="text">Siswa</span></a>
        </li>
        <li class="nav-item">
            @if(!empty($halaman) && $halaman == 'about' )
            <a href="{{url('about')}}" class="nav-link px-2 active"><i class="material-icons icon">dashboard</i>
                @else
                <a href="{{url('about')}}" class="nav-link px-2"><i class="material-icons icon">dashboard</i>
                    @endif
                    <span class="text">About</span></a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link sideMenuToggler px-2"><i class="material-icons icon">view_list</i>
                <span class="text">Resize</span></a>
        </li>
    </ul>
</div>