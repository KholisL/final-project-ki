@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Members</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('member/create')}}" class="btn btn-info">Tambah</a><br><br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
                  <th>Point</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($member as $data)
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->alamat}}</td>
                  <td>{{$data->no_telp}}</td>
                  <td>{{$data->point}}</td>
                  <td>
                    <a href="{{url('member/detail/'.$data->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                    <a href="{{url('member/edit/'.$data->id)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('member/destroy/'.$data->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin mengahapus data?')"><i class="fa fa-trash"></i></a>
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