@extends('masterAdmin')

@section('judul','Tambah Pegawai')

@section('isi')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(session()->has('status'))
	        	<div class="alert alert-{{session('status')}}">
				    {{session('pesan')}}.
				</div>
	        @endif
	        <div class="panel panel-default">
                <div class="panel-heading"><h4>Input Tanda Tangan Pengesahan</h4></div>
                <div class="panel-body">
                	<form action="{{ route('ttd.store') }}" method="post">
                		{{csrf_field()}}
						<div class="form-group">
							<label>Nama</label>
							<input type="" name="nama" class="form-control">
						</div>

						<div class="form-group">
							<label>NIP</label>
							<input type="" name="nip" class="form-control">
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="" name="jabatan" class="form-control">
						</div>

						<div class="form-group">
							<button> Save</button>	
					</form>
                </div>
            </div>
		
	</div>
</div>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>