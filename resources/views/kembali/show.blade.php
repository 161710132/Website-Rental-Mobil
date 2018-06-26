@extends('layouts.admin1')
@section('content')
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Data Peminjaman Mobil dengan Nama  {{$kembali->Rental->nama_kons}}
			  <br><br>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">

<label class="control-label">NIK Konsumen :</label> {{$kembali->Rental->nik_kons}}
<br>
<label class="control-label">Nama Konsumen :</label> {{$kembali->Rental->nama_kons}}
<br>
<label class="control-label">Jenis Kelamin :</label> {{$kembali->Rental->jk_kons}}
<br>
<label class="control-label">Alamat :</label> {{$kembali->Rental->alamat}}
<br>
<label class="control-label">No Handphone :</label> {{$kembali->Rental->no_hp}}
<br>
<label class="control-label">Tanggal Sewa :</label> {{$kembali->Rental->tgl_sewa}}
<br>
<label class="control-label">Tanggal Kembali :</label> {{$kembali->Rental->tgl_kembali}}
<br>
<label class="control-label">Jumlah Hari :</label> {{$kembali->Rental->jumlah_hari}}
<br>
<label class="control-label">Total Sewa :</label> {{$kembali->Rental->total_sewa}}
<br>

<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->tgl_kembali_akhir}} 
<br>
<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->jumlah_hari}} Hari 
<br>
<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->telat}} 
<br>
<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->denda}} 
<br>
<label class="control-label">Tanggal Kembali Akhir :</label> {{$kembali->total_harga}} 
<br>
<label class="control-label">Total Sewa :</label> {{$kembali->Rental->total_sewa}}
<br>




        		</div>
			</div>	
		</div>
	</div>
</div>
@endsection