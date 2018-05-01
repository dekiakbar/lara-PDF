@extends('masterAdmin')

@section('judul','Daftar Pegawai')

@section('isi')
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
        		<h4>Daftar Data Pegawai</h4>
        		@if(session()->has('status'))
	        		<div class="alert alert-{{session('status')}}">
					    {{session('pesan')}}.
					</div>
	        	@endif
        		<div class="table-responsive">    
            		<table id="mytable" class="table table-bordred table-striped">
                   
                   		<thead>
		                   	<th>No</th>
		                   	<th>Nama</th>
		                    <th>Email</th>
		                    <th>Hak Akses</th>
		                    <th>Jabatan</th>
		                    <th>Wilayah</th>
		                    <th>Edit</th>  
                    		<th>Delete</th>
                  		</thead>

					    <tbody>
						    @foreach($pegawais as $p)
								<tr>
								    <td>{{++$no}}</td>
								    <td>{{$p->users->name}}</td>
								    <td>{{$p->users->email}}</td>
								    <td>Super Admin</td>
								    <td>{{$p->jabatan}}</td>
								    <td>{{$p->wilayah}}</td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="Edit">
								    		<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="{{'#'.md5('edit'.$p->id)}}">
								    			<span class="glyphicon glyphicon-pencil"></span>
								    		</button>
								    	</p>
								    </td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="Delete">
								    		<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="{{'#'.md5($p->id.'delete')}}">
								    			<span class="glyphicon glyphicon-trash"></span>
								    		</button>
								    	</p>
								    </td>
							    </tr>
						    @endforeach
    					</tbody>
        			</table>
            	</div>
        	</div>
		</div>
	</div>

	@foreach($pegawais as $p)
		<div class="modal fade" id="{{md5('edit'.$p->id)}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		    <div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				        	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				        </button>
				        <h4 class="modal-title custom_align" id="Heading">Edit Data</h4>
			      	</div>
			        <div class="modal-body">
				       <form action="{{ route('pegawai.update',encrypt($p->id)) }}" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="patch">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="name" class="form-control" value="{{$p->users->name}}" readonly>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" value="{{$p->users->email}}" readonly>
							</div> 
							
							<div class="form-group">
								<label>Hak Akses</label>
								<input type="txet" name="role" class="form-control" value="{{$p->users->roles->first()->name}}" readonly>
							</div>

							<div class="form-group">
								<label>NIP</label>
								<input type="text" name="nip" class="form-control" value="{{$p->nip}}">
							</div>

							<div class="form-group">
								<label>Pangkat</label>
								<input type="text" name="pangkat" class="form-control" value="{{$p->pangkat}}">
							</div>

							<div class="form-group">
								<label>Golongan</label>
								<select name="golongan" class="form-control">
									<option value="{{$p->golongan}}" selected>{{$p->golongan}}</option> 
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
								<input type="text" name="jabatan" class="form-control" value="{{$p->jabatan}}">
							</div>

							<div class="form-group">
								<label>Wilayah Tugas</label>
								<input type="text" name="wilayah" class="form-control" value="{{$p->wilayah}}">
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" name="tempat" class="form-control" value="{{$p->tempat}}">
							</div>

							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" name="tanggal" class="form-control" value="{{$p->tanggal}}">
							</div>

							<div class="form-group">
								<label>Angkutan</label>
								<input type="text" name="angkutan" class="form-control" value="{{$p->angkutan}}">
							</div>

							<div class="form-group">
								<button class="btn btn-primary"> Save</button>
							</div>	
						</form>
			      	</div>
			        <div class="modal-footer ">
			        	<button type="button" class="btn btn-warning btn-lg" style="width: 100%;">
			        		<span class="glyphicon glyphicon-ok-sign"></span> Update
			        	</button>
			      	</div>
		        </div> 
		  	</div> 
	    </div>
	@endforeach    
    
    @foreach($pegawais as $p)
    	<div class="modal fade" id="{{md5($p->id.'delete')}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	      	<div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			        		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			        	</button>
			        	<h4 class="modal-title custom_align" id="Heading">Delete Data Pegawai</h4>
			      	</div>
			        <div class="modal-body">
			       		<div class="alert alert-danger">
			       			<span class="glyphicon glyphicon-warning-sign"></span> 
			       			Anda yakin ingin menghapus data dengan nama pegawai <strong>{{$p->users->name}}</strong> ?
			       		</div>
			      	</div>
			        <div class="modal-footer ">
				        <button type="button" class="btn btn-success" onclick="event.preventDefault();document.getElementById('{{md5('ya'.$p->id)}}').submit();">
				        	<span class="glyphicon glyphicon-ok-sign"></span> 
				        	Ya
				        </button>
				        <form id="{{md5('ya'.$p->id)}}" action="{{ route('pegawai.destroy',encrypt($p->id)) }}" method="post" style="display: none;"> 
				        	{{csrf_field()}}
				        	<input type="hidden" name="_method" value="delete">
				        </form>
				        <button type="button" class="btn btn-default" data-dismiss="modal">
				        	<span class="glyphicon glyphicon-remove"></span> 
				        	Tidak
				        </button>
			      	</div>
			    </div> 
		  	</div>
	    </div>
    @endforeach
@endsection