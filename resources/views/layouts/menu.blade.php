<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" value="llllllllllllll">
 </button>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="/"><i class="glyphicon glyphicon-home"></i> Principal</a>
            </li>
            <li>
            <a href="#"><i class="glyphicon glyphicon-th-large"></i> Archivo<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="#"><i class="glyphicon glyphicon-user"></i> Usuario<span class="fa arrow"></span></a>
                     <ul class="nav nav-third-level">
                        <li>
                            <a href="{{ route('usuarios.index') }}"><i class="glyphicon glyphicon-user"></i> Listados</a>
                        </li>
                        <li>
                            <a href="{{ url('usuarios/eliminada') }}"><i class="glyphicon glyphicon-repeat"></i> Eliminadas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-barcode"></i> Encomienda<span class="fa arrow"></span></a>
                     <ul class="nav nav-third-level">
                        <li>
                            <a href="{{ route('encomienda.index') }}"><i class="glyphicon glyphicon-barcode"></i> Listados</a>
                        </li>
                        <li>
                            <a href="{{ url('encomienda/eliminada') }}"><i class="glyphicon glyphicon-repeat"></i> Eliminadas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-signal"></i> Banco<span class="fa arrow"></span></a>
                     <ul class="nav nav-third-level">
                        <li>
                            <a href="{{ route('banco.index') }}"><i class="glyphicon glyphicon-signal"></i> Listados</a>
                        </li>
                        <li>
                            <a href="{{ url('banco/eliminada') }}"><i class="glyphicon glyphicon-repeat"></i> Eliminadas</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-tag"></i> Tipo de Pago<span class="fa arrow"></span></a>
                     <ul class="nav nav-third-level">
                        <li>
                            <a href="{{ route('inventario.index') }}"><i class="glyphicon glyphicon-tag"></i> Listados</a>
                        </li>
                        <li>
                            <a href="{{ route('inventario.index') }}"><i class="glyphicon glyphicon-repeat"></i> Eliminadas</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="glyphicon glyphicon-cog"></i> Configuración<span class="fa arrow"></span></a>
                     <ul class="nav nav-third-level">
                        <li>
                            <a href="{{ route('configuracion.index') }}"><i class="glyphicon glyphicon-cog"></i> Listados</a>
                        </li>
                        <li>
                            <a href="{{ route('configuracion.index') }}"><i class="glyphicon glyphicon-cog"></i> Eliminadas</a>
                        </li>
                    </ul>
                </li>
            </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-th-list"></i> Ordenes<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('ordene.index') }}"><i class="glyphicon glyphicon-list-alt"></i> Ordenes</a>
                    </li>
                    <li>
                        <a href="{{ route('ordene.enviado') }}"><i class="fa fa-truck"></i> Enviados</a>
                   </li>
                    <li>
                        <a href="{{ url('inventario/eliminada') }}"><i class="glyphicon glyphicon-repeat"></i> Eliminadas</a>
                    </li>
                    <li>
                        <a href="{{ route('ordene.compra') }}"><i class="glyphicon glyphicon-list-alt"></i> Enviar solicitud de Pago</a>
                    </li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="glyphicon glyphicon-th-list"></i> Producto<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('inventario.index') }}"><i class="glyphicon glyphicon-list-alt"></i> Productos</a>
                    </li>
                    <li>
                        <a href="{{ route('imagenes.index') }}"><i class="glyphicon glyphicon-picture"></i> Imagenes</a>
                    </li>
                    <li>
                        <a href="{{ url('inventario/eliminada') }}"><i class="glyphicon glyphicon-repeat"></i> Eliminadas</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Migraciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('migracion.index') }}"><i class="glyphicon glyphicon-list-alt"></i> Productos</a>
                    </li>
                    <li>
                        <a href="{{ route('migracion.imagenes') }}"><i class="glyphicon glyphicon-picture"></i> Imágenes</a>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>