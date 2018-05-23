@extends('masterAdmin')

@section('judul','Daftar Tanda Tangan')

@section('isi')
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
        		@if(session()->has('status'))
	        		<div class="alert alert-{{session('status')}} alert-dismissible" role="alert">
	        			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        				<span aria-hidden="true">&times;</span>
	        			</button>
					    {{session('pesan')}}.
					</div>
	        	@endif
        		<h4>
        			Daftar Data Tanda Tangan
        			<a href="{{ route('ttd.create') }}" class="btn btn-primary btn-sm" style="float: right;">
        				<span class="glyphicon glyphicon-plus"></span> 
        				Tanda Tangan
        			</a>
        		</h4>
        		<div class="table-responsive">    
            		<table id="mytable" class="table table-stripped">
                   
                   		<thead>
                   			<th>No</th>
		                   	<th>Nama</th>
		                   	<th>Nip</th>
		                    <th>Jabatan</th>
		                    <th>Edit</th>  
                    		<th>Delete</th>
                  		</thead>

					    <tbody>
						    @foreach($ttds as $k)
								<tr>
								    <td>{{++$no}}</td>
								    <td>{{$k->nama}}</td>
								    <td>{{$k->nip}}</td>
								    <td>{{$k->jabatan}}</td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="Edit">
								    		<button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="{{'#'.md5('edit'.$k->id)}}">
								    			<span class="glyphicon glyphicon-pencil"></span>
								    		</button>
								    	</p>
								    </td>
								    <td>
								    	<p data-placement="top" data-toggle="tooltip" title="Delete">
								    		<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="{{'#'.md5($k->id.'delete')}}">
								    			<span class="glyphicon glyphicon-trash"></span>
								    		</button>
								    	</p>
								    </td>
							    </tr>
						    @endforeach
    					</tbody>
        			</table>
            	</div>
            	<div class="text-center">
					{{ $ttds->appends(\Request::except('page'))->links('vendor.pagination.default') }}
				</div>
        	</div>
		</div>
	</div>

	@foreach($ttds as $k)
		<div class="modal fade" id="{{md5('edit'.$k->id)}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		    <div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				        	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				        </button>
				        <h4 class="modal-title custom_align" id="Heading">Edit Data</h4>
			      	</div>
			        <div class="modal-body">
				       <form action="{{ route('ttd.update',encrypt($k->id)) }}" method="post" id="{{md5('submit'.$k->id)}}">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="patch">
							<div class="form-group">
								<label>Nama</label>
								<input type="" name="nama" class="form-control" value="{{$k->nama}}">
							</div>

							<div class="form-group">
								<label>NIP</label>
								<input type="" name="nip" class="form-control" value="{{$k->nip}}">
							</div>

							<div class="form-group">
								<label>Jabatan</label>
								<input type="" name="jabatan" class="form-control" value="{{$k->jabatan}}">
							</div>
						</form>
			      	</div>
			        <div class="modal-footer ">
			        	<button type="button" class="btn btn-warning btn-lg" style="width: 100%;" onclick="event.preventDefault();document.getElementById('{{md5('submit'.$k->id)}}').submit();">
			        		<span class="glyphicon glyphicon-ok-sign"></span> Update
			        	</button>
			      	</div>
		        </div> 
		  	</div> 
	    </div>
	@endforeach    
    
    @foreach($ttds as $k)
    	<div class="modal fade" id="{{md5($k->id.'delete')}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
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
			       			Anda yakin ingin menghapus data dengan nama pegawai <strong>ini</strong> ?
			       		</div>
			      	</div>
			        <div class="modal-footer ">
				        <button type="button" class="btn btn-success" onclick="event.preventDefault();document.getElementById('{{md5('ya'.$k->id)}}').submit();">
				        	<span class="glyphicon glyphicon-ok-sign"></span> 
				        	Ya
				        </button>
				        <form id="{{md5('ya'.$k->id)}}" action="{{ route('ttd.destroy',encrypt($k->id)) }}" method="post" style="display: none;"> 
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