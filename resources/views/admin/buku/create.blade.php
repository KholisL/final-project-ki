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
            <form class="form-horizontal" action="{{url('buku/store')}}" method="POST">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Judul Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul buku">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputPassword3" class="col-sm-2 control-label">Penulis</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Masukkan nama penulis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Penerbit</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tahun Terbit</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan tahun terbit">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Point</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="point_dibeli" name="point_dibeli" placeholder="Masukkan point yang didapat user">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Point Membeli</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="point_membeli" name="point_membeli" placeholder="Masukkan yang harus dikeluarkan user">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori Buku</label>
                  <div class="col-sm-10">
                      <select type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="Masukkan Kategori Buku">
                        <option selected="selected">Pilih Kategori Buku</option>
                         @foreach ($kategori as $data)
                            <option value="{{$data->id}}">{{$data->kategori_buku}}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('buku')}}" type="submit" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </div>
            </form>
          </div>  
    </div>
  </div>
</section>
@endsection

