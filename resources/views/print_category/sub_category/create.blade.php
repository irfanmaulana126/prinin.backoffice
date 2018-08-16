@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lokasi
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Master</a></li>
        <li>Category</li>
        <li>Sub Category</li>
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header box-header with-border">
              <h3 class="box-title">Create Lokasi Kota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{url('/master/category/sub-category/store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('print_category_id') ? ' has-error' : 'has-feedback' }}">
                        <select class="form-control select2" name="print_category_id" style="width: 100%;"  required autofocus>
                            @foreach($data as $cat)
                            <option <?php if (old('print_category_id') == $cat->id ) echo 'selected="selected"';?> value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('print_category_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('print_category_id') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : 'has-feedback' }}">
                        <input id="provinsi" type="text" class="form-control" name="name"  placeholder="Nama Sub Category" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="row">
                        <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                        </div>
                        <div class="col-md-2 pull-right">
                            <a type="submit" href="{{url('/master/lokasi/kota')}}" class="btn btn-primary btn-block btn-flat">Kembali</a>
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