@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Data Member</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="get">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Member" value="{{$member->nama}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" value="{{$member->alamat}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No. Telepon</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan nama no.telepon" value="{{$member->no_telp}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Point</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="point" id="point" placeholder="Masukkan point" value="{{$member->point}}" readonly="readonly">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('member')}}" type="submit" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </div>
            </form>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection