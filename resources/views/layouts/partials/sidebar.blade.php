<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="">

    <img src="{{ asset('imagenes/Logo_Cbk_1.png') }}" style="width:70px; height: auto; margin-top: 5px;">

    </div>


    <div class="sidebar-brand-text mx-3" style="font-family: 'Montserrat', sans-serif;">Cubikar <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('/')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Inicio</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Configuración
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Administración</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">


            <a class="collapse-item" href="{{url('roles')}}" >
            <i class="fas fa-id-card  fa-fw"></i> Roles</a>

            <a class="collapse-item" href="{{url('usuarios')}}">

           
            <i class="fas fa-user fa-fw"></i>
            Usuarios</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHumana"
        aria-expanded="true" aria-controls="collapseHumana">
        <i class="fa fa-user-secret" aria-hidden="true"></i>
        <span>Gestión Humana</span>
    </a>
    <div id="collapseHumana" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Recursos Humanos:</h6>
            <a class="collapse-item" href="{{url('empleados.index')}}">
            <i class="fa fa-users" aria-hidden="true"></i> Empleados</a>


        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fa fa-tags" aria-hidden="true"></i>
        <span>CRM / Oportunidades</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Oportunidad Comercial:</h6>
            <a class="collapse-item" href="{{url('clientes.index')}}"> <i class="fa fa-address-book" aria-hidden="true"></i> Clientes</a>
            <a class="collapse-item" href="{{url('ofertas.index')}}"> <i class="fa fa-tag" aria-hidden="true"></i> Ofertas Comerciales</a>

        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePropuesta"
        aria-expanded="true" aria-controls="collapsePropuesta">
        <i class="fa fa-calculator" aria-hidden="true"></i>
        <span>Propuesta economica</span>
    </a>
    <div id="collapsePropuesta" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Administrar APU:</h6>
            <a class="collapse-item" href="utilities-color.html">
            <i class="fa fa-road" aria-hidden="true"></i> Actividades</a>
            <a class="collapse-item" href="utilities-border.html">
            <i class="fa fa-paper-plane" aria-hidden="true"></i> Capitulación</a>
            <a class="collapse-item" href="utilities-color.html">
            <i class="fa fa-cubes" aria-hidden="true"></i> Materiales</a>
            <a class="collapse-item" href="utilities-border.html">
            <i class="fa fa-gavel" aria-hidden="true"></i> Herramientas</a>
            <a class="collapse-item" href="utilities-color.html">
            <i class="fa fa-truck" aria-hidden="true"></i> Precios Transporte</a>
            <a class="collapse-item" href="utilities-border.html">
            <i class="fa fa-child" aria-hidden="true"></i> Precios Mano de Obra</a>

        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Gestión
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fa fa-building" aria-hidden="true"></i>
        <span>Proyectos</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Planificador de Proyectos:</h6>
            <a class="collapse-item" href="login.html">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <i class="fa fa-key" aria-hidden="true"></i> Ofertas Adjudicadas</a>

            <div class="collapse-divider"></div>

            <a class="collapse-item" href="404.html">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Compras / Proveedores</a>

        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInventario"
        aria-expanded="true" aria-controls="collapseInventario">
        <i class="fa fa-briefcase" aria-hidden="true"></i>
        <span>Inventario</span>
    </a>
    <div id="collapseInventario" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">En bodega:</h6>
            <a class="collapse-item" href="login.html">
            <i class="fa fa-wrench" aria-hidden="true"></i> Herramientas y materiales</a>

            <div class="collapse-divider"></div>

            <a class="collapse-item" href="404.html">
            <i class="fa fa-rocket" aria-hidden="true"></i> Maquinas</a>

        </div>
    </div>
</li>







</ul>
<!-- End of Sidebar -->
