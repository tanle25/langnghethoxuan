<table class="table table-striped table-bordered table-hover dataTables-example">
	<thead>
		<tr>
			<th class="no-sort check-all-table text-center"><input type="checkbox" id="master"></th>
			<th class="text-center">Tên sản phẩm</th>
			<th class="text-center">Mã sản phẩm</th>
			<th class="text-center">User</th>
			<th class="text-center">Số sao</th>
			<th class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $obj)
		<tr>
			<td class="text-center"><input type="checkbox" class="sub_chk" data-id="{{$obj->id}}"></td>
			<td class="text-center">{{$obj->product != null ? $obj->product->name : ''}}</td>
			<td class="text-center">{{$obj->product != null ? $obj->product->product_code : ''}}</td>
			<td class="text-center">{{$obj->user != null ? $obj->user->name : ''}}</td>
			<td class="text-center">{{ $obj->star }}</td>
			<td class="text-center">
				<a 	class="btn btn-danger btn-circle btn-sm delete-button" 
					data-action ="{{ route('admin-rate.destroy',$obj->id) }}" type="button">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>