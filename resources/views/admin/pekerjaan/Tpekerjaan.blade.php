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
                <div class="panel-heading"><h4>Input Jenis Pekerjaan</h4></div>
                <div class="panel-body">
					<form action="{{ route('pekerjaan.store') }}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<label>Kode Program</label>
							<input type="text" name="kode_prog" class="form-control">
						</div>

						<div class="form-group">
							<label>Program</label>
							<input type="text" name="program" class="form-control">
						</div>

						<div class="form-group">
							<label>Kode Kegiatan</label>
							<input type="text" name="kode_keg" class="form-control">
						</div>

						<div class="form-group">
							<label>Kegiatan</label>
							<input type="text" name="kegiatan" class="form-control"> 
						</div>

						<div class="form-group">
							<label>Kode Output</label>
							<input type="text" name="kode_output" class="form-control">
						</div>

						<div class="form-group">
							<label>Output</label>
							<input type="text" name="output" class="form-control">
						</div>

						<div class="form-group">
							<label>Kode Komponen</label>
							<input type="text" name="kode_komponen" class="form-control">
						</div>

						<div class="form-group">
							<label>Komponen</label>
							<input type="text" name="komponen" class="form-control">
						</div>

						<div class="form-group">
							<label>Sub Komponen</label>
							<input type="text" name="sub_komp" class="form-control">
						</div>

						<div class="form-group">
							<label>Kode Akun</label>
							<input type="text" name="kode_akun" class="form-control">
						</div> 

						<div class="form-group">
							<label>Akun</label>
							<input type="text" name="akun" class="form-control">
						</div>

						<div class="form-group">
							<label>Volume </label>
							<input type="text" name="volume" class="form-control">
						</div>
						
						<div class="form-group">
							<label>Satuan</label>
							<input type="text" name="akun" class="form-control">
						</div>

						<div class="form-group">
							<label>Detail</label>
							<input type="text" name="detail" class="form-control">
						</div>

						<div class="form-group">
							<label>Seksi</label>
							<select name="seksi" class="form-control">
								<option value="produksi">Produksi</option>
								<option value="tu">TU</option>
								<option value="distribusi">Distribusi</option>
								<option value="sosial">Sosial</option>
								<option value="ipds">IPDS</option>
								<option value="nerwilis">Nerwilis</option>
							</select>
						</div>

						<div class="form-group">
							<label>Index</label>
							<input type="text" name="index" class="form-control">
						</div>

						<div class="form-group">
							<label>Bulan</label>
							<input type="text" name="bulan" class="form-control">
						</div>

						<div class="form-group">
							<label>Tahun</label>
							<input type="text" name="tahun" class="form-control">
						</div>

						<div class="form-group">
							<label>Keterangan</label>
							<select class="form-control" name="keterangan">
								<option value="pcl">PCL</option>
								<option value="plm">PLM</option>
							</select>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Save</button>	
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection