@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Pembeli</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('member/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Member">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No. Telepon</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_telp" name="no_telp" placeholder="Masukkan nama no.telepon">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Point</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="point" id="point" placeholder="Masukkan point">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('member')}}" type="submit" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </div>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection