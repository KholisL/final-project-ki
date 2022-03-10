@extends('template.main')
@section('content')
<section class="content">
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Input Data Penjualan</h3><br>
			<a href="{{url('/penjualan')}}" style="float: right;"><i class="fa fa-chevron-circle-left "> Back to First Page</i></a>
			<!-- <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></</button>
				<button type="button" href="{{url('/penjualan')}}" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			</div> -->
		</div>
		<!-- box-header -->
		<div class="box-body">
		<form action="{{route('simpan_transaksi')}}" method="POST">
			<div class="row">
				{{csrf_field()}}
				<div class="col-md-6">
					<div class="form-group">
						<label>ID Member</label>
						<input type="text" class="form-control" id="id_member" name="id" placeholder="Masukan ID Member" onkeyup="member()">
						<i><p class="help-block">*Kosongi jika bukan member</p></i>
					</div>
					<div class="form-group">
						<label>Nama Member</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="" >
					</div>
					<div class="form-group">
						<label>Nama Buku</label>
						<input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul Buku" onkeyup="buku()">
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Penulis</label>
							<input type="text" class="form-control" id="penulis" name="penulis">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Stok Buku</label>
							<input type="text" class="form-control" id="stok" name="stok">
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label>Point</label>
							<input type="text" class="form-control" id="point" name="point">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Harga</label>
							<input type="text" class="form-control" id="harga" name="harga" placeholder="">
						</div>
					</div>
					<div class="form-group">
						<label>Jumlah Beli</label>
						<input type="text" class="form-control" id="jumlah_beli" name="jumlah" onkeyup="jml_beli();">
					</div>
					<div class="form-group">
						<label>Sub Point</label>
						<input type="text" class="form-control" id="sub_point" name="sub_point" placeholder="">
					</div>
					<div class="form-group">
						<label>Sub Total</label>
						<input type="text" class="form-control" id="sub_total" name="sub_total" placeholder="">
					</div>
						<a href="javascript:void(0)" onclick="TambahRow();" class="btn btn-info">Tambah</a>
				</div>
				<!-- col -->
				<div class="col-md-6">
					<br>
					<div class="table-responsive m-t-40">
						<table id="myTable" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Buku</th>
									<th>Harga</th>
									<th>Jumlah Beli</th>
									<th>Sub Total</th>
									<th>Sub Point</th>
									<th>Sisa Stok</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="add-row">	
							</tbody>
						</table>
					</div>
					<div class="form-group">
						<div class="form-group">
							<label>Total Harga</label>
							<input type="text" class="form-control" id="total" name="total" placeholder="">
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Potongan Harga</label>
								<input type="text" class="form-control" id="diskon" name="diskon" onkeyup="hargadiskon()" value="0">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nominal yang Harus Dibayar</label>
								<input type="text" class="form-control" id="nominal" name="nominal" placeholder="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Bayar</label>
								<input type="text" class="form-control" id="bayar" name="bayar" required="required" onkeyup="kembalian();">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kembali</label>
								<input type="text" class="form-control" id="kembali" name="kembali" placeholder="">
							</div>
						</div>
							<div class="form-group">
								<label>Total Point</label>
								<input type="text" class="form-control" id="total_point" name="total_point" placeholder="">
							</div>
						<div>
							<a href="{{url('penjualan/struk')}}" target="_blank"><button class="btn btn-success" style="float: right;" onclick="simpan_transaksi()">Simpan Transaksi</button></a>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="hidden" class="form-control" id="id_buku" name="id_buku" placeholder="">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<input type="hidden" class="form-control" id="ss_stok" name="ss_stok" placeholder="">
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<input type="hidden" class="form-control" id="id_penjualan" name="id_penjualan" value="{{ $nomat }}" placeholder="">
							</div>
						</div>
					</div>
					<!-- form group -->
				</div>
				<!-- col -->
			</div>
			<!-- row -->
		</form>
		</div>
		<!-- box-body -->
	</div>
</section>
@endsection
@push('bottom')
<script type="text/javascript">
	function TambahRow(){

		var jumlah = parseInt($('#stok').val())
		var jumlah_pinjam = parseInt($('#jumlah_beli').val())
		if (jumlah_pinjam>jumlah) {
			alert('Stok data tidak mencukupi untuk dipinjam')
			$('#jumlah_beli').val('')
		}else{
			val = $('#judul').val()
			if (val=='') {
				alert('data kosong')
			}else{
				i = 1;
					elem = '<tr>'+
								'<td>'+i+'<input type="hidden" name="dt_id_buku[]" id="dt_id_buku" value="'+$('#id_buku').val()+'"></td>'+
								'<td>'+$('#judul').val()+'<input type="hidden" value="'+$('#jumlah_beli').val()+'"name="dt_jumlah_beli[]" id="dt_jumlah_beli"></td>'+
								'<td>'+$('#harga').val()+'<input type="hidden" name="dt_harga[]" id="dt_harga" value="'+$('#harga').val()+'"></td>'+
								'<td>'+$('#jumlah_beli').val()+'</td>'+
								'<td>'+$('#sub_point').val()+'<input type="hidden" name="dt_sub_point[]" id="dt_sub_point" value="'+$('#sub_point').val()+'"></td>'+
								'<td>'+$('#sub_total').val()+'<input type="hidden" name="dt_sub_total[]" id="dt_sub_total" value="'+$('#sub_total').val()+'"></td>'+
								'<td>'+$('#ss_stok').val()+'<input type="hidden" name="dt_ss_stok[]" id="dt_ss_stok" value="'+$('#ss_stok').val()+'"></td>'+

								'<td>'+
									'<a href="javascript:void(0)" onclick="Delete(this)" class="btn btn-danger btn-sm">Hapus</a>'+
								'</td>'+
							'</tr>'

					$('#add-row').append(elem);

					totsb=0;
					totpt=0;	
					sbt=$("#sub_total").val();
					pt=$("#sub_point").val();
					var table=document.getElementById("add-row");
					for(var t=0;t<table.rows.length;t++) {
						totsb=parseInt(totsb)+parseInt(table.rows[t].cells[5].innerHTML);
						totpt=parseInt(totpt)+parseInt(table.rows[t].cells[4].innerHTML);
					}
					$("#total").val(totsb);
					$("#total_point").val(totpt);

					

					Clean();
					i=i+1;
			}

		}
	}
	function member(){
		iddd = $("#id_member").val()
		if (iddd==''){
			$('#nama').val('');
		}
		$.ajax({
			url:"{{route('member/cari')}}",
			type:"GET",
			dataType:"json",
			data:{
				id:$("#id_member").val()
			},
			success:function(hasil){
				if (hasil.val==0) {
					// alert('Data tidak ditemukan');
					$('#nama').val('');

				}else if(hasil.val==2){
					// alert('Data tidak ditemukan 2');
					$('#nama').val('');

				}else{
					// alert('Data tidak ditemukan 3');
					$('#nama').val(hasil.data.nama);
				}
			}
		});
	}

	function buku(){
		iddd = $("#judul").val()
		if (iddd==''){
			$('#penulis').val('');
			$('#stok').val('');
			$('#stok_buku').val('');
			$('#point').val('');
			$('#harga').val('');
			$('#id_buku').val('');
		}
		$.ajax({
			url:"{{route('buku/carii')}}",
			type:"GET",
			dataType:"json",
			data:{
				judul:$("#judul").val()
			},
			success:function(hasil){
				if (hasil.val==0) {
					// alert('Data tidak ditemukan');
					$('#penulis').val('');
					$('#stok').val('');
					$('#stok_buku').val('');
					$('#point').val('');
					$('#harga').val('');
					$('#id_buku').val('');

				}else if(hasil.val==2){
					// alert('Data tidak ditemukan 2');
					$('#penulis').val('');
					$('#stok').val('');
					$('#stok_buku').val('');
					$('#point').val('');
					$('#harga').val('');
					$('#id_buku').val('');

				}else{
					// alert('Data tidak ditemukan 3');
					$('#penulis').val(hasil.data.penulis);
					$('#stok').val(hasil.data.stok);
					$('#stok_buku').val(hasil.data.stok);
					$('#point').val(hasil.data.point_dibeli);
					$('#harga').val(hasil.data.harga);
					$('#id_buku').val(hasil.data.id);
				}
			}
		});
	}

	function Delete(e){
		$(e).parent().parent().remove()
	}

	function jml_beli(){
		hrg=document.getElementById('harga').value;
		pnt=document.getElementById('point').value;
		stk = document.getElementById('stok').value;
		jml=document.getElementById('jumlah_beli').value;
		total = hrg*jml;
		point = pnt*jml;
		sisa_stok = stk-jml;
		document.getElementById('ss_stok').value=sisa_stok;
		document.getElementById('sub_point').value=point;
		document.getElementById('sub_total').value=total;
		
	}

	function hargadiskon(){
		var total = document.getElementById('total').value;
		var diskon = document.getElementById('diskon').value;
		nominal = total-diskon;
		document.getElementById('nominal').value=nominal;

	}

	function kembalian(){
		var nominal = document.getElementById('nominal').value;
		var bayar = document.getElementById('bayar').value;
		var kembali = bayar-nominal;
		document.getElementById('kembali').value=kembali;
	}

	function Clean(){
		$('#judul').val('')
		$('#penulis').val('')
		$('#stok').val('')
		$('#ss_stok').val('')
		$('#point').val('')
		$('#harga').val('')
		$('#jumlah_beli').val('')
	}
</script>
@endpush
