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
                <div class="panel-heading"><h4>Tambah Data Pegawai</h4></div>
                <div class="panel-body">

					<form action="{{ route('pegawai.store') }}" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="name" class="form-control">
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control">
						</div> 
						
						<div class="form-group">
							<label>Hak Akses</label>
							<select name="role" class="form-control"> 
								@foreach($roles as $role)
									<option value="{{$role->id}}">{{$role->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<div class="form-group">
							<label>Password Konfirmasi</label>
							<input type="password" name="password_confirmation" class="form-control">
						</div>

						<div class="form-group">
							<label>NIP</label>
							<input type="text" name="nip" class="form-control">
						</div>

						<div class="form-group">
							<label>Pangkat</label>
							<input type="text" name="pangkat" class="form-control">
						</div>

						<div class="form-group">
							<label>Golongan</label>
							<select name="golongan" class="form-control"> 
								<option value="IA">IA</option>
								<option value="IB">IB</option>
								<option value="IC">IC</option>
								<option value="ID">ID</option>
								<option value="IE">IE</option>
								<option value="IIA">IIA</option>
								<option value="IIB">IIB</option>
								<option value="IIC">IIC</option>
								<option value="IID">IID</option>
								<option value="IIE">IIE</option>
								<option value="IIIA">IIIA</option>
								<option value="IIIB">IIIB</option>
								<option value="IIIC">IIIC</option>
								<option value="IIID">IIID</option>
								<option value="IIIE">IIIE</option>
								<option value="IVA">IVA</option>
								<option value="IVB">IVB</option>
								<option value="IVC">IVC</option>
								<option value="IVD">IVD</option>
								<option value="IVE">IVE</option>
								<option value="Honorer">Honorer</option>
							</select> 
						</div>

						<div class="form-group">
							<label>Jabatan</label>
							<input type="text" name="jabatan" class="form-control">
						</div>

						<div class="form-group">
							<label>Wilayah Tugas</label>
							<input type="text" name="wilayah" class="form-control">
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="tempat" class="form-control">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input id="datepicker" type="text" name="tanggal" class="form-control">
						</div>

						<div class="form-group">
							<label>Angkutan</label>
							<input type="text" name="angkutan" class="form-control">
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