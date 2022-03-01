@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Jenis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('kategori/update/'.$kategori->id)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Buku</label>
                  <input type="text" value="{{$kategori->kategori_buku}}" class="form-control" id="kategori_buku" name="kategori_buku" placeholder="Masukkan Kategori Buku">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('/kategori')}}" type="submit" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
              </div>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection