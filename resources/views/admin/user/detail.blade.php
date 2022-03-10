@extends('template.main')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama" value="{{$user->name}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{$user->email}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>
                  <div class="col-sm-10">
                      <a data-lightbox="roadtrip" title="Detail photo" href="{{asset($user->photo)}}"><img style="width:200px" src="{{asset($user->photo)}}"></a>
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Role</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="Role" id="Role" placeholder="Masukkan email" value="{{ucfirst($user->role)}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Is Superadmin</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="is_superadmin" id="is_superadmin" placeholder="Masukkan is_superadmin" value="{{$user->is_superadmin}}" readonly="readonly">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/user')}}" type="submit" class="btn btn-primary">Back</a>
              </div>
            </form>
          </div>  
    </div>
  </div>
</section>
@endsection