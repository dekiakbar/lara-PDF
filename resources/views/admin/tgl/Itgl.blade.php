@extends('mAdmin')

@section('judul','Daftar Waktu Pelaksanaan')

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
        			Daftar Data Waktu Pelaksanan
        			<a href="{{ route('tgl.create') }}" class="btn btn-primary btn-sm" style="float: right;">
        				<span class="glyphicon glyphicon-plus"></span> 
        				Waktu Pelaksanan
        			</a>
        		</h4>
        		<div class="table-responsive">    
            		<table id="mytable" class="table table-stripped">
                   
                   		<thead>
		                   	<th>No</th>
		                   	<th>Pelaksanaan</th>
		                    <th>Berangkat</th>
		                    <th>Kembali</th>
		                    <th>Tempat Berangkat</th>
		                    <th>Tempat Tujuan</th>
		                    <th>Edit</th>  
                    		<th>Delete</th>
                  		</thead>

					    <tbody>
						    @foreach($tgls as $p)
								<tr>
								    <td>{{++$no}}</td>
								    <td>{{$p->waktupelaksanaan}}</td>
								    <td>{{$p->tanggalberangkat}}</td>
								    <td>{{$p->tanggalkembali}}</td>
								    <td>{{$p->tempatberangkat}}</td>
								    <td>{{$p->tempattujuan}}</td>
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
            	<div class="text-center">
					{{ $tgls->appends(\Request::except('page'))->links('vendor.pagination.default') }}
				</div>
        	</div>
		</div>
	</div>

	@foreach($tgls as $p)
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
				       <form action="{{ route('tgl.update',encrypt($p->id)) }}" method="post" id="{{md5('submit'.$p->id)}}">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="patch">
							<div class="form-group">
							<label>Waktu Pelaksanaan</label>
							<input type="text" name="waktupelaksanaan" class="form-control" id="tgl" value="{{$p->waktupelaksanaan}}">
						</div>

						<div class="form-group">
							<label>Tanggal Berangkat</label>
							<input type="text" name="tanggalberangkat" class="form-control" id="tgl1" value="{{$p->tanggalberangkat}}">
						</div>

						<div class="form-group">
							<label>Tanggal Harus Kembali</label>
							<input type="text" name="tanggalkembali" class="form-control" id="tgl2" value="{{$p->tanggalkembali}}">
						</div>

						<div class="form-group">
							<label>Tempat Berangkat</label>
							<input type="text" name="tempatberangkat" class="form-control" value="{{$p->tempatberangkat}}">
						</div>
						
						<div class="form-group">
							<label>Tempat Tujuan</label>
							<input type="text" name="tempattujuan" class="form-control" value="{{$p->tempattujuan}}">
						</div>	
						</form>
			      	</div>
			        <div class="modal-footer ">
			        	<button type="button" class="btn btn-warning btn-lg" style="width: 100%;" onclick="event.preventDefault();document.getElementById('{{md5('submit'.$p->id)}}').submit();">
			        		<span class="glyphicon glyphicon-ok-sign"></span> Update
			        	</button>
			      	</div>
		        </div> 
		  	</div> 
	    </div>
	@endforeach    
    
    @foreach($tgls as $p)
    	<div class="modal fade" id="{{md5($p->id.'delete')}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	      	<div class="modal-dialog">
			    <div class="modal-content">
			        <div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			        		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			        	</button>
			        	<h4 class="modal-title custom_align" id="Heading">Delete Data tgl</h4>
			      	</div>
			        <div class="modal-body">
			       		<div class="alert alert-danger">
			       			<span class="glyphicon glyphicon-warning-sign"></span> 
			       			Anda yakin ingin menghapus data waktu pelaksanaan ini ?
			       		</div>
			      	</div>
			        <div class="modal-footer ">
				        <button type="button" class="btn btn-success" onclick="event.preventDefault();document.getElementById('{{md5('ya'.$p->id)}}').submit();">
				        	<span class="glyphicon glyphicon-ok-sign"></span> 
				        	Ya
				        </button>
				        <form id="{{md5('ya'.$p->id)}}" action="{{ route('tgl.destroy',encrypt($p->id)) }}" method="post" style="display: none;"> 
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