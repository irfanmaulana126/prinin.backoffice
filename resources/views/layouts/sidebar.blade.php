  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Irfan Maulana</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu Admin: : style can be found in sidebar.less -->
       <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if(!empty($halaman) && $halaman=='dashboard' && $active== 'active'){ echo"active";}else{echo"";} ?>">
          <a href="{{url('/')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if(!empty($halaman) && $halaman=='user' && $active== 'active'){ echo"active";}else{echo"";} ?>">
          <a href="{{url('/user')}}">
            <i class="fa fa-users"></i>
            <span>User Vendor</span>
          </a>
        </li>
        <li class="<?php if(!empty($halaman) && $halaman=='vendor' && $active== 'active'){ echo"active";}else{echo"";} ?> treeview">
          <a href="#">
            <i class="fa fa-user-secret"></i>
            <span>Vendor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='vendor' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/vendor/vendor')}}"><i class="fa fa-circle-o"></i> Data Toko Vendor</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='vendor-bank' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/vendor/vendor-bank')}}"><i class="fa fa-circle-o"></i> Vendor Account Bank</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='vendor-toko-bank' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/vendor/vendor-toko-bank')}}"><i class="fa fa-circle-o"></i> Toko Account Bank</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='billing-vendor' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/vendor/billing-vendor')}}"><i class="fa fa-circle-o"></i> Billing Invoice</a></li>
          </ul>
        </li>
        <li class="<?php if(!empty($halaman) && $halaman=='laporan' && $active== 'active'){ echo"active";}else{echo"";} ?> treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='transaksi' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/laporan/transaksi')}}"><i class="fa fa-circle-o"></i> Laporan Transaksi</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='laba-transaksi' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/laporan/laba-transaksi')}}"><i class="fa fa-circle-o"></i> Laporan Laba Transaksi</a></li>
          </ul>
        </li>
        <li class="<?php if(!empty($halaman) && $halaman=='master' && $active== 'active'){ echo"active";}else{echo"";} ?> treeview">
          <a href="#">
            <i class="fa fa-th"></i> 
            <span> Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='lokasi' && $active== 'active'){ echo"active";}else{echo"";} ?> treeview">
              <a href="#">
                <i class="fa fa-circle-o"></i>
                <span>Lokasi</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(!empty($sub_sub_halaman) && $sub_sub_halaman=='provinsi' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/lokasi/provinsi')}}"><i class="fa fa-circle-o"></i> Provinsi</a></li>
                <li class="<?php if(!empty($sub_sub_halaman) && $sub_sub_halaman=='kota' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/lokasi/kota')}}"><i class="fa fa-circle-o"></i> Kota</a></li>
                <li class="<?php if(!empty($sub_sub_halaman) && $sub_sub_halaman=='kecamatan' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/lokasi/kecamatan')}}"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
                <li class="<?php if(!empty($sub_sub_halaman) && $sub_sub_halaman=='kelurahan' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/lokasi/kelurahan')}}"><i class="fa fa-circle-o"></i> Kelurahan</a></li>
              </ul>
            </li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='userrole' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/userrole')}}"><i class="fa fa-circle-o"></i> User Role</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='userlevel' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/userlevel')}}"><i class="fa fa-circle-o"></i> User Level</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='bank' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/bank')}}"><i class="fa fa-circle-o"></i> Bank</a></li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='category' && $active== 'active'){ echo"active";}else{echo"";} ?> treeview">
            <a href="#">
                <i class="fa fa-circle-o"></i>
                <span>Print Category</span>
                  <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(!empty($sub_sub_halaman) && $sub_sub_halaman=='category' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/category/category')}}"><i class="fa fa-circle-o"></i> Category</a></li>
                <li class="<?php if(!empty($sub_sub_halaman) && $sub_sub_halaman=='sub-category' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/category/sub-category')}}"><i class="fa fa-circle-o"></i> Sub Category</a></li>
              </ul>
            </li>
            <li class="<?php if(!empty($sub_halaman) && $sub_halaman=='billing' && $active== 'active'){ echo"active";}else{echo"";} ?>"><a href="{{url('/master/billing')}}"><i class="fa fa-circle-o"></i> Biling Type</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>