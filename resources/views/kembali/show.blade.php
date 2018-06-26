@extends('layouts.admin1')
@section('content')
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Data Peminjaman Mobil dengan Nama  {{$rental->nama_kons}}
			  <br><br>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">

<label class="control-label">NIK Konsumen :</label> {{$kembali->nik_kons}}
<br>
<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->tgl_kembali_akhir}}
<br>
<label class="control-label">Jumlah Hari :</label> {{$kembali->jumlah_hari}}
<br>



        		</div>
			</div>	
		</div>
	</div>
</div>
@endsection