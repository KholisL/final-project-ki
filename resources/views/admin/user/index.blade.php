@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('user/create')}}" class="btn btn-info">Tambah</a><br><br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @foreach($user as $data)
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->email}}</td>
                  <td>{{ucfirst($data->role)}}</td>
                  <td>
                    @if($data->photo != '')
                      <a data-lightbox="roadtrip" title="Detail photo" href="{{asset($data->photo)}}"><img style="width:60px" src="{{asset($data->photo)}}"></a>
                    @else
                      -
                    @endif
                  </td>
                  <td>
                    <a href="{{url('user/detail/'.$data->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                    <a href="{{url('user/edit/'.$data->id)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('user/destroy/'.$data->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin mengahapus data?')"><i class="fa fa-trash"></i></a>
                    <!-- <a href="#" class="btn btn-sm btn-danger delete" data-id="{{ $data->id  }}" 
                   data-judul="{{ $data->nama }}">Delete</a> -->
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

@push('js')

<script>
      $('.delete').click( function(){
                  var judulid = $(this).attr('data-id');
                  var judul_data = $(this).attr('data-judul');
                  swal({
                      title: "Yakin?",
                      text: "kamu akan menghapus data user "+judul_data+"",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                      })
                      .then((willDelete) => {
                      if (willDelete) {
                          window.location = "user/destroy/"+judulid+"" 
                          swal("Data berhasil dihapus", {
                          icon: "success",
                          });
                      } else {
                          swal("Data Tidak Jadi dihapus");
                      }
                      });
              });
</script>                       
  