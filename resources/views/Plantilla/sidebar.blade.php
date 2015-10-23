@inject('number', 'App\Http\Controllers\Calendar\CalendarInjectionController')
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->first_name.' '.Auth::user()->father_last_name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->type }}</a>
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
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-word-o"></i> <span>Trabajo de Investigacion</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('sistema/nuevotrabajo')}}"><i class="fa fa-circle-o"></i>Nuevo Trabajo</a></li>
                    <li><a href="{{url('sistema/ListaTrabajos')}}"><i class="fa fa-circle-o"></i>Lista Trabajo</a></li>
                    <li><a href=" {{url('sistema/MisTrabajos')}}"><i class="fa fa-circle-o"></i>Mis Trabajos</a></li>
                    @if(Auth::user()->type != 'Cursante')
                        <li><a href=" {{url('sistema/ListaRevision') }}"><i class="fa fa-circle-o"></i>Revisiones</a></li>
                    @endif
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-book"></i> <span>Documentacion</span>
                </a>
            </li>

            @if(Auth::user()->type=='Admin')
                <li>
                    <a href="#">
                        <i class="fa fa-area-chart"></i> <span>Usuarios Registrados</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-plus-square"></i> <span>Nueva Linea de Investigacion</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="">
                        <i class="fa fa-area-chart"></i><span>Reportes</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('admin/reportes') }}"><i class="fa fa-circle-o"></i>Usuarios</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Trabajos de Investigacion</a></li>
                        <li><a href=""><i class="fa fa-circle-o"></i>Lineas de Investigacion</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>