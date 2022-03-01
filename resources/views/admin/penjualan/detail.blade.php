@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
		  <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Data Penjualan</h3>
            </div><br>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data">
              <div class="box-body" id="parent-form-area">
                <div class="table-responsive">
                  <table id="table-detail" class="table table-striped">
                    <tbody>
                      <tr>
                        <td class="col-sm-2">Nama Pembeli</td>
                        <td>{{$nama}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Judul Buku</th>
                        <th>Jumlah Beli</th>
                        <th>Sub Total</th>
                        <th>Sub Point Belanja</th>
                      </tr>
                    </thead>
                    @foreach($dataa as $dt)
                    <tbody>
                      <tr>
                        <th>{{$dt->judul}}</th>
                        <th>{{$dt->jumlah_beli}}</th>
                        <th>{{$dt->sub_total}}</th>
                        <th>{{$dt->sub_point_belanja}}</th>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td class="col-sm-2">Total Harga</td>
                        <td>{{$dt->total}}</td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">Uang Bayar</td>
                        <td>{{$dt->bayar}}</td>
                      </tr>
                      <tr>
                        <td class="col-sm-2">Total Point Belanja</td>
                        <td>{{$dt->point_belanja}}</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>                                           
              </div><!-- /.box-body -->
              <div class="box-footer" style="background: #F5F5F5">
                <a href="{{url('penjualan')}}" type="submit" class="btn  btn-primary">Back</a>
            </form>
          </div>	
		</div>
	</div>
</section>
@endsection