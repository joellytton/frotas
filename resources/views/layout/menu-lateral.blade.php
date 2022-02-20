<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
        <img src="{{asset('img/cars.png')}}" alt="AdminLTE Logo" class="brand-image img-circle" >

        <span class="brand-text font-weight-normal">SisFrotas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('agendamento.index')}}" class="nav-link">
                        <i class="fas fa-solid fa-car-side nav-icon"></i>
                        <p>Agendamento</p>
                    </a>
                </li>

                <li class="nav-header">ADMINISTRAÇÃO</li>
                <li class="nav-item">
                    <a href="{{route('categoriaVeiculo.index')}}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Categoria veículo</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('motorista.index')}}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Motoristas</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('veiculo.index')}}" class="nav-link">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Veiculos</p>
                    </a>
                </li>
           </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
