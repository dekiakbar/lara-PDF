@extends('masterAdmin')

@section('judul','Tambah Pegawai')

@section('isi')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Tambah Data Pegawai</h4></div>
                <div class="panel-body">

					<form action="" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Nama</label>
							<input type="" name="nama" class="form-control">
						</div>

						<div class="form-group">
							<label>NIP</label>
							<input type="" name="nip" class="form-control">
						</div>

						<div class="form-group">
							<label>Pangkat</label>
							<input type="" name="pangkat" class="form-control">
						</div>

						<div class="form-group">
							<label>Golongan</label>
							<select class="form-control"> 
								<option>IA</option>
								<option>IB</option>
								<option>IC</option>
								<option>ID</option>
								<option>IE</option>
								<option>IIA</option>
								<option>IIB</option>
								<option>IIC</option>
								<option>IID</option>
								<option>IIE</option>
								<option>IIIA</option>
								<option>IIIB</option>
								<option>IIIC</option>
								<option>IIID</option>
								<option>IIIE</option>
								<option>IVA</option>
								<option>IVB</option>
								<option>IVC</option>
								<option>IVD</option>
								<option>IVE</option>
								<option>Honorer</option>
							</select> 
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="" name="jabatan" class="form-control">
						</div>

						<div class="form-group">
							<label>Wilayah Tugas</label>
							<input type="" name="wilayah" class="form-control">
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="" name="tempat" class="form-control">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="" name="tanggal" class="form-control">
						</div>

						<div class="form-group">
							<label>Angkutan</label>
							<input type="" name="angkutan" class="form-control">
						</div>

						<div class="form-group">
							<label>User</label>
							<input type="" name="user" class="form-control">
						</div> 

						<div class="form-group">
							<label>Password</label>
							<input type="" name="password" class="form-control">
						</div>

						<div class="form-group">
							<button class="btn btn-primary"> Save</button>
						</div>	
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection