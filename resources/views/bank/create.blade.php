@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bank
        <small>Control panel</small>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Master</a></li>
        <li>Bank</li>
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header box-header with-border">
              <h3 class="box-title">Create Bank</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{url('/master/bank/store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : 'has-feedback' }}">
                        <input id="Bank" type="text" class="form-control" name="name"  placeholder="Nama Bank" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('code') ? ' has-error' : 'has-feedback' }}">
                        <input id="code" type="text" class="form-control" name="code"  placeholder="Code" value="{{ old('code') }}" required autofocus>
                            @if ($errors->has('code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="row">
                        <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                        </div>
                        <div class="col-md-2 pull-right">
                            <a type="submit" href="{{url('/master/bank')}}" class="btn btn-primary btn-block btn-flat">Kembali</a>
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