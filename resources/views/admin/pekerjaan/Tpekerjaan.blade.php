@extends('masterAdmin')

@section('judul','Tambah Pegawai')

@section('isi')
<div class="container">
	<div class="col-md-6">
		<form>
			<h3>Input Jenis Pekerjaan</h3>
			<div class="form-group">
				<label>Kode Program</label>
				<input type="" name="kode_prog" class="form-control">
			</div>

			<div class="form-group">
				<label>Program</label>
				<input type="" name="program" class="form-control">
			</div>

			<div class="form-group">
				<label>Kode Kegiatan</label>
				<input type="" name="kode_keg" class="form-control">
			</div>

			<div class="form-group">
				<label>Kegiatan</label>
				<input type="" name="kegiatan" class="form-control"> 
			</div>

			<div class="form-group">
				<label>Kode Output</label>
				<input type="" name="kode_output" class="form-control">
			</div>

			<div class="form-group">
				<label>Output</label>
				<input type="" name="output" class="form-control">
			</div>

			<div class="form-group">
				<label>Kode Komponen</label>
				<input type="" name="kode_komponen" class="form-control">
			</div>

			<div class="form-group">
				<label>Komponen</label>
				<input type="" name="komponen" class="form-control">
			</div>

			<div class="form-group">
				<label>Sub Komponen</label>
				<input type="" name="sub_komp" class="form-control">
			</div>

			<div class="form-group">
				<label>Kode Akun</label>
				<input type="" name="kode_akun" class="form-control">
			</div> 

			<div class="form-group">
				<label>Akun</label>
				<input type="" name="akun" class="form-control">
			</div>

			<div class="form-group">
				<label>Volume </label>
				<input type="" name="volume" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Satuan</label>
				<input type="" name="akun" class="form-control">
			</div>

			<div class="form-group">
				<label>Detail</label>
				<input type="" name="detail" class="form-control">
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
				<input type="" name="index"class="form-control">
			</div>

			<div class="form-group">
				<label>Bulan</label>
				<input type="" name="bulan" class="form-control">
			</div>

			<div class="form-group">
				<label>Tahun</label>
				<input type="" name="tahun" class="form-control">
			</div>

			<div class="form-group">
				<label>Keterangan</label>
				<select class="form-control">
					<option value="pcl">PCL</option>
					<option value="plm">PLM</option>
				</select>
			</div>



			<div class="form-group">
				<button> Save</button>	
		</form>
	</div>
</div>
@endsection