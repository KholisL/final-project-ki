<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
</head>
<body translate="no" onload="javascript:window.print()" onclick="simpan_transaksi()">
<!-- <body translate="no" onload="" onclick="simpan_transaksi()"> -->
  <div id="invoice-POS">
  	<center id="top">
      <div class="info"> 
        <h2>Toko Buku Mulia</h2>
        <p style="font-size: 10px;">Jl. Kelet Ploso KM 36 Keling</p>
        <p style="font-size: 10px;">Telp. 088112334556</p>
      </div>
    </center>
    <hr>
    <p style="text-align: left; font-size: 7px;">Nama Pembeli : {{Request::get('nama')}}</p>
    <p style="text-align: left; font-size: 7px;">Operator : {{Auth::user()->role}}</p>
    <p style="text-align: left; font-size: 7px;">Tanggal : <?php echo date('Y-m-d H:i:s');?></p>
    <hr>
    	<div id="bot">
    		<div id="table">
                <table>
                   @foreach($query as $data)
                    <tr>
                         <td class="tableitem"><p class="itemtext">{{$data->judul}}</p></td>
                    </tr>
                    <tr>
                         <td class="tableitem"><p class="itemtext">{{$data->jumlah_beli}}</p></td>
                    	 <td class="tableitem"><p class="itemtext">{{$data->harga}}</p></td>
                    	 <td class="tableitem"><p class="itemtext">{{$data->sub_point_belanja}}</p></td>
                         <td class="tableitem"><p class="itemtext">{{$data->sub_total}}</p></td>
                    </tr>
                    @endforeach
                    <tr class="service"></tr>
                    <tr id="table">
                    	 <td></td>
                         <td class="tableitem itemtext"><h2>Point</h2></td>
                         <td class="tableitem itemtext"><h2>{{Request::get('total_point')}}</h2></td>
                    </tr>
                    <tr id="table">
                    	 <td></td>
                         <td class="tableitem itemtext"><h2>Total</h2></td>
                         <td class="tableitem itemtext"><h2>{{Request::get('total')}}</h2></td>
                    </tr>
                    <tr id="table">
                    	 <td></td>
                         <td class="tableitem itemtext"><h2>Diskon</h2></td>
                         <td class="tableitem itemtext"><h2>{{Request::get('diskon')}}</h2></td>
                    </tr>
                    <tr id="table">
                    	 <td></td>
                         <td class="tableitem itemtext"><h2>Harga Keseluruhan</h2></td>
                         <td class="tableitem itemtext"><h2>{{Request::get('nominal')}}</h2></td>
                    </tr>
                    <tr id="table" >
                    		<td></td>
                         <td class="tableitem itemtext"><h2>Bayar</h2></td>
                         <td class="tableitem itemtext"><h2>{{Request::get('bayar')}}</h2></td>
                    </tr>
                    <tr id="table">
                         <td></td>
                         <td class="tableitem itemtext"><h2>Kembali</h2></td>
                         <td class="tableitem itemtext" name=""><h2>{{Request::get('kembali')}}</h2></td>
                    </tr>
                </table>
            </div>
            <hr>
            <div id="legalcopy">
               	<p><strong>Terimakasih Telah Berbelanja!</strong></p> 
               	<p class="warn" style="font-size: 8px;">Barang yang sudah dibeli tidak dapat dikembalikan. Jangan lupa berkunjung kembali</p>
            </div>
        </div>
  </div>
</body>
<style>
		@media print {
		    .page-break { display: block; page-break-before: always; }
		}
		      #invoice-POS {
		  box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
		  padding: 5mm;
		  margin: 0 auto;
		  width: 60mm;
		  background: #FFF;
		}
		#invoice-POS ::selection {
		  background: #f31544;
		  color: #FFF;
		}
		#invoice-POS ::moz-selection {
		  background: #f31544;
		  color: #FFF;
		}
		#invoice-POS h2 {
		  font-size: .9em;
		  padding-top: 	10px;
		  font-family: Courier New;
		}
		#invoice-POS p {
		  font-size: .7em;
		  color: #666;
		  line-height: 1.2em;
		  font-weight: bold;
		  font-family: Courier New;
		}
		#invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot {
		  /* Targets all id with 'col-' */
		}
		#invoice-POS #top {
		  min-height: 20px;
		}
		#invoice-POS #mid {
		  min-height: 10px;
		}
		#invoice-POS #bot {
		  min-height: 50 px;
		}

		#invoice-POS table {
		  width: 100%;
		  border-collapse: collapse;
		}
		#invoice-POS .tabletitle {
		  font-size: .5em;
		  background: #EEE;
		  font-weight: bold;
		  font-family: Courier New;
		}
		#invoice-POS .service {
		  border-bottom: 1px solid #7a7676;
		}
		#invoice-POS .item {
		  width: 24mm;
		  padding-left: 5px;
		  font-weight: bold;
		  font-family: Courier New;
		}
		#invoice-POS .itemtext {
		  font-size: .5em;
		  font-weight: bold;
		  font-family: Courier New;
		}
		#invoice-POS #legalcopy {
		  margin-top: 1mm;
		  font-weight: bold;
		  font-family: Courier New;
		} 
	</style>

 
</html>