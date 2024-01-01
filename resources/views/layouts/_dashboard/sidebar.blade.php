<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
       <div class="nav">
          <a class="nav-link {{set_active('dashboard.index')}}" href="{{route('dashboard.index')}}">
             <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
             </div>
             {{ trans('dashboard.link.dashboard') }}
          </a>
          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.master') }}</div>
          @can('message_show')
          <a class="nav-link" href="{{ route('reminder.form') }}">
             <div class="sb-nav-link-icon">
                <i class="far fa-newspaper"></i>
             </div>
             {{ trans('dashboard.link.message') }}
          </a>
          @endcan
          <a class="nav-link {{ set_active(['inventories.index', 'inventories.create', 'inventories.edit'])}}" href="{{ route('inventories.index') }}">
             <div class="sb-nav-link-icon">
                <i class="fas fa-bookmark"></i>
             </div>
             {{ trans('dashboard.link.inventories') }}
          </a>

          <div class="sb-sidenav-menu-heading">{{ trans('dashboard.menu.user_permission') }}</div>
          @can('user_show')
          <a class="nav-link {{ set_active(['users.index', 'users.create', 'users.edit'])}}" href="{{route('users.index')}}">
             <div class="sb-nav-link-icon">
                <i class="fas fa-user"></i>
             </div>
             {{ trans('dashboard.link.users') }}
          </a> 
          @endcan

          @can('role_show')
          <a class="nav-link {{set_active(['roles.index', 'roles.show', 'roles.create', 'roles.edit'])}}" href="{{route('roles.index')}}">
            <div class="sb-nav-link-icon">
               <i class="fas fa-user-shield"></i>
            </div>
            {{ trans('dashboard.link.roles') }}
         </a> 
          @endcan
          
          
       </div>
    </div>
    <div class="sb-sidenav-footer">
       <div class="small">{{ trans('dashboard.label.logged_in_as') }}:</div>
       {{Auth::user()->name}}
    </div>
 </nav>
 