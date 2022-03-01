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
            <form class="form-horizontal" action="{{url('kategori/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kategori Buku</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori buku">
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