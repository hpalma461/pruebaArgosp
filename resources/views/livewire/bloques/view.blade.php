@section('title', __('Bloques'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fas fa-hourglass-half text-info"></i>
							Bloques </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Bloques">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Agregar Bloques
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.bloques.create')
						@include('livewire.bloques.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead text-center">
							<tr> 
								<td>No.</td> 
								<th>BLOQUE</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody class="text-center">
							@foreach($bloques as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->bloque }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirmar eliminar {{$row->bloque}}? \n¡Los bloques eliminados no se pueden recuperar!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $bloques->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>