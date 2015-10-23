@inject('number', 'App\Http\Controllers\Calendar\CalendarInjectionController')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    @if(Auth::user()->type=='Admin')
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name.' '.Auth::user()->father_last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Administrador</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Navegacion Principal</li>
            <li class="active treeview">
                <a href="{{ url('admin/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel Principal</span>
                </a>
            </li>
            <li>
                <a href="{{url('calendar/calendar')}}">
                    <i class="fa fa-calendar"></i> <span>Calendario</span>
                        <small class="label pull-right bg-red">{{ $number->getNumberEvents() }}</small>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-pencil"></i> <span>Estudiantes</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-word-o"></i> <span>Trabajo</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('sistema/nuevotrabajo')}}"><i class="fa fa-circle-o"></i>Nuevo Trabajo</a></li>
                    <li><a href="{{url('sistema/ListaTrabajos')}}"><i class="fa fa-circle-o"></i>Lista Trabajo</a></li>
                    <li><a href=" {{url('sistema/MisTrabajos')}}"><i class="fa fa-circle-o"></i>Mis Trabajos</a></li>
                    <li><a href=" {{url('sistema/ListaRevision') }}"><i class="fa fa-circle-o"></i>Revisiones</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-book"></i> <span>Documentacion</span>
                </a>
            </li>
        </ul>
    @elseif(Auth::user()->type=='Tutor')
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name.' '.Auth::user()->father_last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Tutor</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Navegacion Principal</li>
            <li class="active treeview">
                <a href="{{ url('tutor/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel Principal</span>
                </a>
            </li>
            <li>
                <a href="{{url('calendar/calendar')}}">
                    <i class="fa fa-calendar"></i> <span>Calendario</span>
                    <small class="label pull-right bg-red">{{ $number->getNumberEvents() }}</small>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-word-o"></i> <span>Trabajo</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('sistema/nuevotrabajo')}}"><i class="fa fa-circle-o"></i>Nuevo Trabajo</a></li>
                    <li><a href="{{url('sistema/ListaTrabajos')}}"><i class="fa fa-circle-o"></i>Lista Trabajo</a></li>
                    <li><a href=" {{url('sistema/MisTrabajos')}}"><i class="fa fa-circle-o"></i>Mis Trabajos</a></li>
                    <li><a href=" {{url('sistema/ListaRevision') }}"><i class="fa fa-circle-o"></i>Revisiones</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-book"></i> <span>Documentacion</span>
                </a>
            </li>

        </ul>
    @elseif(Auth::user()->type=='Cursante')
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name.' '.Auth::user()->father_last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i>Cursante</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Navegacion Principal</li>
            <li class="active treeview">
                <a href="{{ url('cursante/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Panel Principal</span>
                </a>
            </li>
            <li>
                <a href="{{url('calendar/calendar')}}">
                    <i class="fa fa-calendar"></i> <span>Calendario</span>
                    <small class="label pull-right bg-red">{{ $number->getNumberEvents() }}</small>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-word-o"></i> <span>Trabajo</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('sistema/nuevotrabajo')}}"><i class="fa fa-circle-o"></i>Nuevo Trabajo</a></li>
                    <li><a href="{{url('sistema/ListaTrabajos')}}"><i class="fa fa-circle-o"></i>Lista Trabajo</a></li>
                    <li><a href=" {{url('sistema/MisTrabajos')}}"><i class="fa fa-circle-o"></i>Mis Trabajos</a></li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-book"></i> <span>Documentacion</span>
                </a>
            </li>

        </ul>
    @endif
    </section>
    <!-- /.sidebar -->
</aside>