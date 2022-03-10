@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ url('/penjualan') }}" enctype="multipart/form-data" method="get" role="search">
                <div class="col-md-4" style="float: right;">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search by Nama Pembeli">
                    <span class="input-group-btn">
                      <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </div>
                <div class="col-md-2">
                  <a href="{{url('penjualan/create')}}" class="btn btn-info">Tambah</a><br><br>
                  @if(g('q'))
                      <a href="{{url('/penjualan')}}"><i class="fa fa-chevron-circle-left "> Back to First Page</i></a>
                  @endif
                <br>
                </div>
              </form><br>

              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pembeli</th>
                  <th>Judul Buku</th>
                  <th>Jumlah Beli</th>
                  <th>Sub Total</th>
                  <th>Sub Point Belanja</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($query as $data)
                <tr>

                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nama_pembeli}}</td>
                  <td>{{$data->judul}}</td>
                  <td>{{$data->jumlah_beli}}</td>
                  <td>{{$data->sub_total}}</td>
                  <td>{{$data->sub_point_belanja}}</td>
                  <td>
                    <a href="{{url('penjualan/destroy/'.$data->id_penjualan)}}" class="btn btn-sm btn-danger" id="delete" onclick="return confirm('Anda yakin ingin mengahapus data?')"><i class="fa fa-trash"></i></a>
                    <a href="{{url('penjualan/detail/'.$data->id_penjualan)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection