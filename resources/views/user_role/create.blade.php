@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Level
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Master</a></li>
        <li >User Role</li>
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header box-header with-border">
              <h3 class="box-title">Create User Role</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{url('/master/userrole/store')}}" method="post">
                    {{ csrf_field() }}
                    
                    <div class="form-group {{ $errors->has('user_id') ? ' has-error' : 'has-feedback' }}">
                        <select class="form-control select2" name="user_id" style="width: 100%;"  required autofocus>
                            @foreach($user as $users)
                            <option <?php if (old('user_id') == $users->id ) echo 'selected="selected"';?> value="{{ $users->id }}">{{ $users->name }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('user_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_id') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('user_level_id') ? ' has-error' : 'has-feedback' }}">
                        <select class="form-control select2" name="user_level_id" style="width: 100%;"  required autofocus>
                            @foreach($role as $roles)
                            <option <?php if (old('user_level_id') == $roles->id ) echo 'selected="selected"';?> value="{{ $roles->id }}">{{ $roles->name }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('user_level_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_level_id') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="row">
                        <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                        </div>
                        <div class="col-md-2 pull-right">
                            <a type="submit" href="{{url('/master/userrole')}}" class="btn btn-primary btn-block btn-flat">Kembali</a>
                        </div>
                    </div>
                </form>
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