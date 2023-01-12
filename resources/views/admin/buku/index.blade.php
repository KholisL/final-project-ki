@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('buku/create')}}" class="btn btn-info">Tambah</a><br><br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Buku</th>
                  <th>Penulis</th>
                  <!-- <th>Penerbit</th> -->
                  <!-- <th>Tahun Terbit</th> -->
                  <th>Stok</th>
                  <th>Harga</th>
                  <th>Point Membeli</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($buku as $data)
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->judul}}</td>
                  <td>{{$data->penulis}}</td>
                  <!-- <td>{{$data->penerbit}}</td> -->
                  <!-- <td>{{$data->tahun}}</td> -->
                  <td>{{$data->stok}}</td>
                  <td>{{$data->harga}}</td>
                  <td>{{$data->point_membeli}}</td>
                  <td>
                    <a href="{{url('buku/detail/'.$data->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                    <a href="{{url('buku/edit/'.$data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('buku/destroy/'.$data->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin mengahapus data?')"><i class="fa fa-trash"></i></a>
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