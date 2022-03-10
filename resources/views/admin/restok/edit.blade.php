@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Stok Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{url('restok/update/'.$buku->id)}}" method="POST">
            	{{csrf_field()}}
            	<div class="box-body">
	              	<div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Buku</label>
	                  <div class="col-sm-10">
	                  	<input type="text" class="form-control" id="judul" name="judul" value="{{$buku->judul}}" readonly="readonly">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Stok Sekarang</label>
	                  <div class="col-sm-10">
	                      <input type="text" class="form-control" id="stok" name="stok" value="{{$buku->stok}}" readonly="readonly">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Stok Masuk</label>
	                  <div class="col-sm-10">
	                      <input type="text" class="form-control" id="stok_masuk" name="stok_masuk" placeholder="Masukan Stok Masuk" onkeyup="tambahStok()">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <div class="col-sm-10">
	                      <input type="hidden" class="form-control" id="stok_buku" name="stok_buku" value="{{$buku->stok}}" readonly="readonly">
	                  </div>
	                </div>
              <!-- /.box-body -->
	              <div class="box-footer">
	                <a href="{{url('restok')}}" type="submit" class="btn btn-primary">Back</a>
	                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
	              </div>
	            </div>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection
@push('bottom')
<script type="text/javascript">

	function tambahStok(){
		var stok=document.getElementById('stok').value;
		var stok_buku=document.getElementById('stok_buku').value;
		var stok_masuk=document.getElementById('stok_masuk').value;
		var total = parseInt(stok_buku)+parseInt(stok_masuk);

		if (!isNaN(total)) {
         	document.getElementById('stok').value=total;
      	}
		
		
	}
</script>
@endpush