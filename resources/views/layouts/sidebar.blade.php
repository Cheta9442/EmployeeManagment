<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>


            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            @if(Auth::user()->is_admin)
            <li class="@if(Request::is('employees/*') || Request::is('employees')) active  @endif">
                <a href="{!! route('employees.index') !!}" >
                    <i class="fa fa-th"></i> <span>Employees</span>
                </a>
            </li>
            @else
            <li class="@if(Request::is('/home')) active  @endif">
                <a href="{!! url('/home') !!}">
                    <i class="fa fa-th"></i> <span>Dashboard</span>
                </a>
            </li>
            @endif
        
            
            

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>