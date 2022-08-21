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
                     <li><a href="{{ url('admin/tambahPenginapan') }}"><i class="fa fa-plus"></i>Tambah Data</a></li>
                     <li><a href="{{ url('admin/dataPenginapan') }}"><i class="fa fa-database"></i>Data Penginapan</a></li>
                 </ul>
             </li>
             <li class="treeview">
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
             </li>
             <li class="treeview">
                 <a href="#">
                     <i class="fa fa-sign-out"></i> <span>Keluar</span>
                 </a>
             </li>

         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
