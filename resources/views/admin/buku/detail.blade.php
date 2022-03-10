@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="get">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="judul" value="{{$buku->judul}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Penulis</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" id="penulis" value="{{$buku->penulis}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value="{{$buku->penerbit}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun terbit" value="{{$buku->tahun}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" value="{{$buku->harga}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok" value="{{$buku->stok}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Point</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="point_dibeli" name="point_dibeli" value="{{$buku->point_dibeli}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Point Membeli</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="point_membeli" name="point_membeli" value="{{$buku->point_membeli}}" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori Buku</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Masukkan Kategori Buku" value="{{$buku->kategori_buku}}" readonly="readonly">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('buku')}}" type="submit" class="btn btn-primary">Back</a>
              </div>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection