<aside class="main-sidebar sidebar-light-primary elevation-1 ">
    <!-- Brand Logo -->
    <a href="{{ route('welcome') }}" class="brand-link ">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-1" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu"
                data-accordion="false">


                {{--  --}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Configurations
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a wire:navigate wire:current='active text-bold' href="{{ route('sites.index') }}"
                                class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sites</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate wire:current='active text-bold' href="{{ route('typeparcs.index') }}"
                                class="nav-link">
                                <i class="far fa-edit nav-icon"></i>
                                <p>Typeparcs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a wire:navigate wire:current='active text-bold' href={{ route('parcs.index') }}
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Parcs</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{--  --}}
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
