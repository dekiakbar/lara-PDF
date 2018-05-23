@extends('masterAdmin')

@section('judul','Tambah Waktu Pelaksanaan Surat Tugas')

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
                <div class="panel-heading"><h4>Masukkan Waktu Pelaksanaan Surat Tugas</h4></div>
                <div class="panel-body">
					<form>
						<div class="form-group">
							<label>Waktu Pelaksanaan</label>
							<input type="text" name="waktupelaksanaan" class="form-control">
						</div>

						<div class="form-group">
							<label>Tanggal Berangkat</label>
							<input type="text" name="tanggalberangkat" class="form-control">
						</div>

						<div class="form-group">
							<label>Tanggal Harus Kembali</label>
							<input type="text" name="tanggalkembali" class="form-control">
						</div>

						<div class="form-group">
							<label>Tempat Berangkat</label>
							<input type="text" name="tempatberangkat" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Tempat Tujuan</label>
							<input type="text" name="tempattujuan" class="form-control">
						</div>
						
						<div class="form-group">
							<button>Save</button>
						</div>

					</form>
                </div>
			</div>
        </div>
	</div>
</div>