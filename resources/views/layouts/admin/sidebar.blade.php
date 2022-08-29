 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">
             <li class="header">MAIN NAVIGATION</li>
             <li class="treeview">
                 <a href="{{ url('/admin') }}">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                 </a>
             </li>
             <li class="treeview">
                 <a href="#">
                     <i class="fa fa-hotel"></i>
                     <span>Penginapan</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ route('admin.penginapan.tambah') }}"><i class="fa fa-plus"></i>Tambah Data</a></li>
                     <li><a href="{{ route('admin.penginapan') }}"><i class="fa fa-database"></i>Data Penginapan</a></li>
                 </ul>
             </li>
             {{-- <li class="treeview">
                 <a href="#">
                     <i class="fa fa-car"></i> <span>Transportasi</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ url('admin/tambahTransportasi') }}"><i class="fa fa-plus"></i> Tambah Data</a></li>
                     <li><a href="{{ url('admin/dataTransportasi') }}"><i class="fa fa-database"></i>Data Transportasi</a></li>
                 </ul>
             </li> --}}
             <li class="treeview">
                 <a href="#">
                     <i class="fa fa-book"></i> <span>Blog</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="#"><i class="fa fa-plus"></i> Tambah Data</a></li>
                     <li><a href="#"><i class="fa fa-database"></i>Data Blog</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="#">
                     <i class="fa fa-user"></i> <span>User</span>
                     <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                     </span>
                 </a>
                 <ul class="treeview-menu">
                     <li><a href="{{ route('admin.user.tambah') }}"><i class="fa fa-plus"></i> Tambah Data</a></li>
                     <li><a href="{{ route('admin.user') }}"><i class="fa fa-database"></i>Data User</a></li>
                 </ul>
             </li>

             <li class="treeview">
                 <a href="#">
                     <i class="fas fa-power-off"></i> <span>Keluar</span>
                 </a>
             </li>

         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
