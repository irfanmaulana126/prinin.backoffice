@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Role
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Master</a></li>
        <li class="active">User Role</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User Role</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row  pull-right">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-default"><i class="fa fa-upload"></i></button>
                      <a href="{{url('/master/userrole/create')}}" type="submit" class="btn btn-default"><i class="fa fa-plus"></i></a> 
                </div>
                <br>
                <br>
              </div>
              <table class="table table-hover table-responsive no-padding">
                <tr>
                  <th>NO</th>
                  <th>Nama User</th>
                  <th>Level User</th>
                  <th>Action</th>
                </tr>
                
                @if (count($data) > 0)
                  <?php $i=0; ?>
                  @foreach($data as $role)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $role->user_id }}</td>
                  <td>{{ $role->user_level_id }}</td>
                  <td> <div class="btn-group">
                  <button type="button" class="btn btn-info"  data-toggle="dropdown">Action</button>
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/master/userrole/edit/'.$role->id)}}"><i class="fa fa-edit"></i>Edit</a></li>
                    <li><a href="{{url('/master/userrole/destroy/'.$role->id)}}"><i class="fa fa-trash"></i>Hapus</a></li>
                  </ul>
                </div></td>
                </tr>
                @endforeach
                @else
                <tr >
                <td colspan="4">Data tidak ditemukan</td>
                </tr>
              @endif
              </table>
               <div class="paging pull-right">
                  {{ $data->links() }}
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection