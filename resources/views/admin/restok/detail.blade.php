@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Jenis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="#" method="POST">
            	<div class="box-body">
	              	<div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Buku</label>
	                  <div class="col-sm-10">
	                  	<input type="text" name="judul" class="form-control" readonly="readonly" value="{{$buku->judul}}">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
	                  <div class="col-sm-10">
	                      <input type="text" class="form-control" name="stok_buku" readonly="readonly" value="{{$buku->stok}}">
	                  </div>
	                </div>
              <!-- /.box-body -->
	              <div class="box-footer">
	                <a href="{{url('restok')}}" type="submit" class="btn btn-primary">Back</a>
	              </div>
	            </div>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection