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
        <li>Lokasi</li>
        <li>Kecamatan</li>
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header box-header with-border">
              <h3 class="box-title">Create Lokasi Kecamatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{url('/master/lokasi/kecamatan/store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('province_id') ? ' has-error' : 'has-feedback' }}">
                        <select id="province" class="form-control select2" name="province_id" style="width: 100%;"  required autofocus>
                            @foreach($data as $prov)
                            <option <?php if (old('province_id') == $prov->id ) echo 'selected="selected"';?> value="{{ $prov->id }}">{{ $prov->name }}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('province_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('province_id') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('city_id') ? ' has-error' : 'has-feedback' }}">
                        <select id="city" class="form-control select2" name="city_id" style="width: 100%;"  required autofocus>
                            
                        </select>
                            @if ($errors->has('city_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city_id') }}</strong>
                                </span>
                            @endif
                    </div>
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : 'has-feedback' }}">
                        <input id="name" type="text" class="form-control" name="name"  placeholder="Nama kecamatan" value="{{ old('name') }}" required autofocus>
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
                            <a type="submit" href="{{url('/master/lokasi/kecamatan')}}" class="btn btn-primary btn-block btn-flat">Kembali</a>
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

  <script>
  $(document).ready(function(){
    $('#province').on('change',function () {
    //    if(province){
           $.ajax({
               url:'/dropdown/'+$(this).val()+'/'+'city',
               type:"GET",
               dataType:'json',
               success:function (data) {
                   $('#city').empty();
                   $.each(data, function(key, value){
                       $('#city').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                   })
               }
           })
    //    }else{
    //         $('#city').empty();
    //    }
    });
  });

  </script>
@endsection