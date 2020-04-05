
	<div class="row">
		<div class="col-sm-12">
			<table class="table">
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Department</th>
					<th>Phone No.</th>
				</tr>
				@foreach($userdetails as $userdata)
					<tr class = "text-center">
						<td>{{ $userdata->id }}</td>
						<td>{{ $userdata->firstname }}</td>
						<td>{{ $userdata->lastname }}</td>
						<td>{{ $userdata->department }}</td>
						<td>{{ $userdata->phone }}</td>
						<td><a href="" class = "btn btn-info">Edit</a></td>
           				 
					 <td><a href="{{route('userdata.delete',['id'=>$userdata->id])}}" class = "btn btn-danger">Delete</a></td>

					</tr>
				@endforeach
			</table>
		</div>
	</div>
