@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Stok Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ url('/restok') }}" enctype="multipart/form-data" method="get" role="search">
                <div class="col-md-4" style="float: right;">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search by Judul Buku">
                    <span class="input-group-btn">
                      <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </form><br>
              @if(g('q'))
                <a href="{{url('/restok')}}"><i class="fa fa-chevron-circle-left "> Back to First Page</i></a>
                @endif
                <br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Buku</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($stok as $data)
                <tr>

                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->judul}}</td>
                  <td>{{$data->stok}}</td>
                  <td>
                  	<a href="{{url('restok/edit/'.$data->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('restok/detail/'.$data->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
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