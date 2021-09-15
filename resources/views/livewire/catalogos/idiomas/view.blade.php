@section('title', __('Idiomas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fas fa-language text-info"></i>
							Idiomas o Dialectos </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Idioma">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Agregar Idioma
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.catalogos.idiomas.create')
						@include('livewire.catalogos.idiomas.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead text-center">
							<tr> 
								<td>No.</td> 
								<th>IDIOMA</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach($idiomas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->idioma }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirmar eliminar {{$row->idioma}}? \n¡Los idiomas eliminados no se pueden recuperar!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>									
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $idiomas->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>