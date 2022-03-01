@extends('template.main')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('user/update/'.$user->id)}}" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{$user->name}}">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{$user->email}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                      <input type="file" class="form-control" id="photo" name="photo">
                      <p class="help-block">Kosongi jika tidak mengubahnya</p><br>
                      <a data-lightbox="roadtrip" title="Detail photo" href="{{asset($user->photo)}}"><img style="width:200px" src="{{asset($user->photo)}}"></a>
                  </div>

                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                 <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Kosongi jika tidak mengubahnya">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Role</label>
                 <div class="col-sm-10">
                    <select type="text" class="form-control" name="role" id="role" placeholder="Masukkan Role">
                        <option selected="selected">Pilih Role</option>
                        <option value="operator" <?php echo $user->role ==  'operator' ? ' selected="selected"' : '';?>>Operator</option>
                        <option value="superadmin" <?php echo $user->role ==  'superadmin' ? ' selected="selected"' : '';?>>Superadmin</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Is Superadmin</label>
                 <div class="col-sm-10">
                    <div id="is_superadmin" name="is_superadmin" class="radio">
                        <label><input required="" type="radio" name="is_superadmin" value="1" <?php echo $user->is_superadmin ==  '1' ? ' checked="checked"' : '';?>> Yes!</label> &nbsp;&nbsp;
                        <label><input type="radio" name="is_superadmin" value="0" <?php echo $user->is_superadmin ==  '0' ? ' checked="checked"' : '';?>> No</label>
                    </div>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/user')}}" type="submit" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </div>
            </form>
          </div>  
    </div>
  </div>
</section>
@endsection