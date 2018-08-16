@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-th"></i> Master</a></li>
        <li >User</li>
        <li class="active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header box-header with-border">
              <h3 class="box-title">Create User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{url('/user/store')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : 'has-feedback' }}">
                                <input id="code" type="text" class="form-control" name="name"  placeholder="Name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : 'has-feedback' }}">
                                <input id="provinsi" type="phone" class="form-control" name="phone"  placeholder="Phone" value="{{ old('phone') }}" required autofocus>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('ktp') ? ' has-error' : 'has-feedback' }}">
                                <input id="provinsi" type="ktp" class="form-control" name="ktp"  placeholder="KTP" value="{{ old('ktp') }}" required autofocus>
                                    @if ($errors->has('ktp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ktp') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('mother_name') ? ' has-error' : 'has-feedback' }}">
                                <input id="provinsi" type="mother_name" class="form-control" name="mother_name"  placeholder="Nama Ibu" value="{{ old('mother_name') }}" required autofocus>
                                    @if ($errors->has('mother_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('mother_name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('username') ? ' has-error' : 'has-feedback' }}">
                                <input id="provinsi" type="text" class="form-control" name="username"  placeholder="Username" value="{{ old('username') }}" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : 'has-feedback' }}">
                                <input id="provinsi" type="Email" class="form-control" name="email"  placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : 'has-feedback' }}">
                                <input id="password" type="password" class="form-control" name="password"  placeholder="Password" value="{{ old('password') }}" required autofocus>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group has-feedback">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('province_id') ? ' has-error' : 'has-feedback' }}">
                                <select id="province" class="form-control select2" name="province_id" style="width: 100%;"  required autofocus>
                                    @foreach($provinsi as $prov)
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
                            <div class="form-group {{ $errors->has('district_id') ? ' has-error' : 'has-feedback' }}">
                                <select id="district" class="form-control select2" name="district_id" style="width: 100%;"  required autofocus>
                                    
                                </select>
                                    @if ($errors->has('district_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('district_id') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('village_id') ? ' has-error' : 'has-feedback' }}">
                                <select id="village" class="form-control select2" name="village_id" style="width: 100%;"  required autofocus>
                                    
                                </select>
                                    @if ($errors->has('village_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('village_id') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('address') ? ' has-error' : 'has-feedback' }}">
                                <input id="provinsi" type="address" class="form-control" name="address"  placeholder="Address" value="{{ old('address') }}" required autofocus>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group {{ $errors->has('bank_id') ? ' has-error' : 'has-feedback' }}">
                                <select id="banks" class="form-control select2" name="bank_id" style="width: 100%;"  required autofocus>
                                    @foreach($bank as $banks)
                                    <option <?php if (old('bank_id') == $banks->id ) echo 'selected="selected"';?> value="{{ $banks->id }}">{{ $banks->name }}</option>
                                    @endforeach
                                </select>
                                    @if ($errors->has('bank_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('bank_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input id="nope" type="checkbox" name="nope" {{ old('nope') ? 'checked' : '' }}> Tidak ada
                            </div>
                        </div>
                    
                            
                            <div class="form-group {{ $errors->has('account_name') ? ' has-error' : 'has-feedback' }}">
                                <input id="account_name" type="account_name" class="form-control" name="account_name"  placeholder="account_name" value="{{ old('account_name') }}" required autofocus>
                                    @if ($errors->has('account_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('account_name') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group {{ $errors->has('account_number') ? ' has-error' : 'has-feedback' }}">
                                <input id="account_number" type="account_number" class="form-control" name="account_number"  placeholder="account_number" value="{{ old('account_number') }}" required autofocus>
                                    @if ($errors->has('account_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('account_number') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-2 pull-right">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                        </div>
                        <div class="col-md-2 pull-right">
                            <a type="submit" href="{{url('user')}}" class="btn btn-primary btn-block btn-flat">Kembali</a>
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

    $('#province').change(function () {
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
    });
    $('#city').on('change',function () {
        $.ajax({
            url:'/dropdown/'+$(this).val()+'/'+'district',
            type:"GET",
            dataType:'json',
            success:function (data) {
                $('#district').empty();
                $.each(data, function(key, value){
                    $('#district').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                })
            }
        })
    });
    $('#district').on('change',function () {
        $.ajax({
            url:'/dropdown/'+$(this).val()+'/'+'village',
            type:"GET",
            dataType:'json',
            success:function (data) {
                $('#village').empty();
                $.each(data, function(key, value){
                    $('#village').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                })
            }
        })
    });
    $("#nope").change(function(){
        if( $('#nope').is(':checked') ){
            $('#account_number').attr('readonly' , true);
            $('#account_name').attr('readonly' , true);
            $('#banks').attr('disabled' , true);
        }
        else{
            $('#account_number').attr('readonly' , false);
            $('#account_name').attr('readonly' , false);
            $('#banks').attr('disabled' , false);
        }
    });
  });

  </script>
@endsection