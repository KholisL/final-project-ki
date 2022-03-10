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
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kategori" id="kategori" value="{{$kategori->kategori_buku}}" readonly="readonly">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{url('kategori')}}" type="submit" class="btn btn-primary">Back</a>
              </div>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection