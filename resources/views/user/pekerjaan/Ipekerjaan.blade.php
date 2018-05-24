@extends('masterUser')

@section('judul','Daftar Pekerjaan')

@section('isi')
	<div class="container">
		<div class="row">
        	<div class="col-md-12">
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
		                    <th>Lihat</th>
		                    <th>Pilih</th>
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
								    	<p data-placement="top" data-toggle="tooltip" title="Lihat">
								    		<button class="btn btn-primary btn-xs" data-title="Lihat" data-toggle="modal" data-target="{{'#'.md5('edit'.$k->id)}}">
								    			<span class="glyphicon glyphicon-search"></span>
								    		</button>
								    	</p>
								    </td>
								    <td>
								    	<form action="{{route('cetak')}}" method="post">
								    		{{csrf_field()}}
								    		<input type="hidden" name="pID" value="{{Auth::id()}}">
								    		<input type="hidden" name="kID" value="{{$k->id}}">
								    		<button class="btn btn-primary btn-xs" type="submit">
								    			<span class="glyphicon glyphicon-ok"></span>
								    		</button>
								    	</form>
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
				        <h4 class="modal-title custom_align" id="Heading">Detail Data</h4>
			      	</div>
			        <div class="modal-body">
				       <form id="{{md5('submit'.$k->id)}}">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="patch">
							<div class="form-group">
								<label>Kode Program</label>
								<input type="text" name="kode_prog" class="form-control" value="{{$k->kode_prog}}" readonly>
							</div>

							<div class="form-group">
								<label>Program</label>
								<input type="text" name="program" class="form-control" value="{{$k->program}}" readonly>
							</div>

							<div class="form-group">
								<label>Kode Kegiatan</label>
								<input type="text" name="kode_keg" class="form-control" value="{{$k->kode_keg}}" readonly>
							</div>

							<div class="form-group">
								<label>Kegiatan</label>
								<input type="text" name="kegiatan" class="form-control" value="{{$k->kegiatan}}" readonly> 
							</div>

							<div class="form-group">
								<label>Kode Output</label>
								<input type="text" name="kode_output" class="form-control" value="{{$k->kode_output}}" readonly>
							</div>

							<div class="form-group">
								<label>Output</label>
								<input type="text" name="output" class="form-control" value="{{$k->output}}" readonly>
							</div>

							<div class="form-group">
								<label>Kode Komponen</label>
								<input type="text" name="kode_komponen" class="form-control" value="{{$k->kode_komponen}}" readonly>
							</div>

							<div class="form-group">
								<label>Komponen</label>
								<input type="text" name="komponen" class="form-control" value="{{$k->komponen}}" readonly>
							</div>

							<div class="form-group">
								<label>Sub Komponen</label>
								<input type="text" name="sub_komp" class="form-control" value="{{$k->sub_komp}}" readonly>
							</div>

							<div class="form-group">
								<label>Kode Akun</label>
								<input type="text" name="kode_akun" class="form-control" value="{{$k->kode_akun}}" readonly>
							</div>

							<div class="form-group">
								<label>Volume </label>
								<input type="text" name="volume" class="form-control" value="{{$k->volume}}" readonly>
							</div>
							
							<div class="form-group">
								<label>Satuan</label>
								<input type="text" name="akun" class="form-control" value="{{$k->akun}}" readonly>
							</div>

							<div class="form-group">
								<label>Detail</label>
								<input type="text" name="detail" class="form-control" value="{{$k->detail}}" readonly>
							</div>

							<div class="form-group">
								<label>Seksi</label>
								<input type="text" name="detail" class="form-control" value="{{$k->seksi}}" readonly>
							</div>

							<div class="form-group">
								<label>Index</label>
								<input type="text" name="index" class="form-control" value="{{$k->index}}" readonly>
							</div>

							<div class="form-group">
								<label>Bulan</label>
								<input type="text" name="bulan" class="form-control" value="{{$k->bulan}}" readonly>
							</div>

							<div class="form-group">
								<label>Tahun</label>
								<input type="text" name="tahun" class="form-control" value="{{$k->tahun}}" readonly>
							</div>

							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="detail" class="form-control" value="{{$k->keterangan}}" readonly>
							</div>
						</form>
			      	</div>
		        </div> 
		  	</div> 
	    </div>
	@endforeach    
@endsection