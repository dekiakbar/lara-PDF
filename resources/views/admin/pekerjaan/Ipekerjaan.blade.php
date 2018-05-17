@extends('masterAdmin')

@section('judul','Daftar Pekerjaan')

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
        			Daftar Data Pekerjaan
        			<a href="{{ route('pekerjaan.create') }}" class="btn btn-primary btn-sm" style="float: right;">
        				<span class="glyphicon glyphicon-plus"></span> 
        				Pekerjaan
        			</a>
        		</h4>
        		<div class="table-responsive">    
            		<table id="mytable" class="table table-stripped">
                   
                   		<thead>
                   			<th>No</th>
		                   	<th>Program</th>
		                   	<th>Kegiatan</th>
		                    <th>Komponen</th>
		                    <th>Output</th>
		                    <th>Volume</th>
		                    <th>Detail</th>
		                    <th>Edit</th>  
                    		<th>Delete</th>
                  		</thead>

					    <tbody>
						    @foreach($kerjas as $k)
								<tr>
								    <td>{{++$no}}</td>
								    <td>{{$k->program}}</td>
								    <td>{{$k->kegiatan}}</td>
								    <td>{{$k->komponen}}</td>
								    <td>{{$k->output}}</td>
								    <td>{{$k->volume}}</td>
								    <td>{{$k->detail}}</td>
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
					{{ $kerjas->appends(\Request::except('page'))->links('vendor.pagination.default') }}
				</div>
        	</div>
		</div>
	</div>

	@foreach($kerjas as $k)
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
				       <form action="{{ route('pekerjaan.update',encrypt($k->id)) }}" method="post" id="{{md5('submit'.$k->id)}}">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="patch">
							<div class="form-group">
								<label>Kode Program</label>
								<input type="text" name="kode_prog" class="form-control" value="{{$k->kode_prog}}">
							</div>

							<div class="form-group">
								<label>Program</label>
								<input type="text" name="program" class="form-control" value="{{$k->program}}">
							</div>

							<div class="form-group">
								<label>Kode Kegiatan</label>
								<input type="text" name="kode_keg" class="form-control" value="{{$k->kode_keg}}">
							</div>

							<div class="form-group">
								<label>Kegiatan</label>
								<input type="text" name="kegiatan" class="form-control" value="{{$k->kegiatan}}"> 
							</div>

							<div class="form-group">
								<label>Kode Output</label>
								<input type="text" name="kode_output" class="form-control" value="{{$k->kode_output}}">
							</div>

							<div class="form-group">
								<label>Output</label>
								<input type="text" name="output" class="form-control" value="{{$k->output}}">
							</div>

							<div class="form-group">
								<label>Kode Komponen</label>
								<input type="text" name="kode_komponen" class="form-control" value="{{$k->kode_komponen}}">
							</div>

							<div class="form-group">
								<label>Komponen</label>
								<input type="text" name="komponen" class="form-control" value="{{$k->komponen}}">
							</div>

							<div class="form-group">
								<label>Sub Komponen</label>
								<input type="text" name="sub_komp" class="form-control" value="{{$k->sub_komp}}">
							</div>

							<div class="form-group">
								<label>Kode Akun</label>
								<input type="text" name="kode_akun" class="form-control" value="{{$k->kode_akun}}">
							</div>

							<div class="form-group">
								<label>Volume </label>
								<input type="text" name="volume" class="form-control" value="{{$k->volume}}">
							</div>
							
							<div class="form-group">
								<label>Satuan</label>
								<input type="text" name="akun" class="form-control" value="{{$k->akun}}">
							</div>

							<div class="form-group">
								<label>Detail</label>
								<input type="text" name="detail" class="form-control" value="{{$k->detail}}">
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
								<input type="text" name="index" class="form-control" value="{{$k->index}}">
							</div>

							<div class="form-group">
								<label>Bulan</label>
								<input type="text" name="bulan" class="form-control" value="{{$k->bulan}}">
							</div>

							<div class="form-group">
								<label>Tahun</label>
								<input type="text" name="tahun" class="form-control" value="{{$k->tahun}}">
							</div>

							<div class="form-group">
								<label>Keterangan</label>
								<select class="form-control" name="keterangan">
									<option value="pcl">PCL</option>
									<option value="plm">PLM</option>
								</select>
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
    
    @foreach($kerjas as $k)
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
				        <form id="{{md5('ya'.$k->id)}}" action="{{ route('pegawai.destroy',encrypt($k->id)) }}" method="post" style="display: none;"> 
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