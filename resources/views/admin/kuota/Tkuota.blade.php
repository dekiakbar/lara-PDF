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
                <div class="panel-heading"><h4>Input Kuota Kerja Pegawai</h4></div>
                <div class="panel-body">
                	<form>
						<div class="form-group">
							<label>Bulan</label>
							<input type="" name="bulan" class="form-control">
						</div>

						<div class="form-group">
							<label>Program</label>
							<select class="form-control">
							<option>$ambil = jenis_pekerjaans::program()</option>
							</select>
						</div>

						<div class="form-group">
							<label>Kegiatan</label>
							<select>
							<option>$ambil = jenis_pekerjaans::kegiatan()</option>
							</select>
						</div>

						<div class="form-group">
							<label>Output</label>
							<select>
							<option>$ambil = jenis_pekerjaans::output()</option>
							</select>
							
						</div>

						<div class="form-group">
							<label>Komponen</label>
							<select>
							<option>$ambil = jenis_pekerjaans::komponen()</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Sub Komponen</label>
							<select>
							<option>$ambil = jenis_pekerjaans::komponen()</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Nama Pegawai</label>
							<select>
							<option>$ambil=pegawais::nama()</option>
							</select>
						</div>

						<div class="form-group">
							<label>Jenis Surat Tugas</label><select>
							<option>Surat Tugas Biasa</option>
							<option>Surat Perjalanan Dinas</option>
							</select>
						</div>

						<div class="form-group">
							<label>Keterangan</label>
							<select>
							<option>$ambil=jenis_pekerjaans::ket()</option>
							</select>
						</div>

						
						<div class="form-group">
							<label>Kuota</label>
							<input type="" name="kuota" class="form-control">
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
@endsection