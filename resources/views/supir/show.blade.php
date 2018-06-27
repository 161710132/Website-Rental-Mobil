@extends('layouts.adminn')
@section('content')
<br>


<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading"> Data Supir
			  <br><br>
			  	
			  </div>
			  <div class="panel-body">

<label class="control-label"> Foto Mobil :</label> {{$supir->foto_supir}}
<br>
<label class="control-label">Nama  :</label> {{$supir->nama}}
<br>
<label class="control-label">Jenis kelamin :</label> {{$supir->jenis_kelamin}}
<br>
<label class="control-label">NIK :</label> {{$supir->nik}}
<br>
<label class="control-label">No Handphone :</label> {{$supir->no_hp}}
<br>
<label class="control-label">Alamat :</label> {{$supir->alamat}}
<br>
<label class="control-label">Umur :</label> {{$supir->umur}}
<br>
<label class="control-label">Harga Supir :</label> {{$supir->harga_sewasupir}}
<br>
<label class="control-label">Status :</label> {{$supir->status}}
<br>



<div class="panel-title pull-right">
<a class="btn btn-primary" href="{{ route('mobil.index') }}">Kembali</a>

			  </div>



        		</div>
			</div>	
		</div>
	</div>
</div>
@endsection