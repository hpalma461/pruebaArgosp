@section('title', __('Cat1Adscripciones'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Catalogo 1 Adscripciones </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Adscripcion">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus"></i>  Crear Adscripcion
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.cat1adscripciones.create')
						@include('livewire.cat1adscripciones.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>ID</td> 
								<th>Adscripcion</th>
								<td>ACCIONES</td>
							</tr>
						</thead>
						<tbody>
							@foreach($cat1adscripciones as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->adscripcion }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Acciones
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirme para eliminar la adscripción {{$row->adscripcion}}? \n¡Las Adscripciones eliminadas no se pueden recuperar! ')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $cat1adscripciones->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>