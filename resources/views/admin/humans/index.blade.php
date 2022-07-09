@extends('admin.layouts.layout')

@section('humans')
active
@endsection

@section('content')

<!-- MAIN -->
		<main>

			@if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Natijalar</h3>
						<a class="create__btn" href="{{route('humans.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>
						
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>F.I.SH</th>
								<th>Vaqti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($human) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($human as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									
									<td>{{$p->created_at}}</td>
									<td>
										<form action="{{ route('humans.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('humans.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$human->links()}}
				</div>
				
			</div>
		</main>
<!-- MAIN -->

@endsection