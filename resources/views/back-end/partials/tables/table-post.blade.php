<table class="table table-striped table-bordered table-hover dataTables-example">
	<thead>
		<tr>
			<th class="no-sort check-all-table text-center"><input type="checkbox" id="master"></th>
			<th class="text-center">Tên bài viết</th>
			<th class="text-center">Slug</th>
			<th class="text-center">Chuyên mục</th>
			<th class="text-center">Người tạo</th>
			<th class="text-center">Trạng Thái</th>
			<th class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $obj)
		<tr>
			<td class="text-center"><input type="checkbox" class="sub_chk" data-id="{{$obj->id}}"></td>
			<td class="text-center">{{$obj->name}}</td>
			<td class="text-center">{{$obj->slug}}</td>
			<td class="text-center">{{ $obj->Category->name }}</td>
			<td class="text-center">{{ $obj->User->name }}</td>
			<td class="text-center">
				@if ($obj->status == 1)
				<span class="label label-success">Đang sử dụng</span></a>
				@else
				<span class="label label-danger">Ngừng sử dụng</span></a>
				@endif
			</td>
			<td class="text-center">
				<a href="{{route('post.edit', $obj->id)}}" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></a>
				<a 	class="btn btn-danger btn-circle btn-sm delete-button"
					data-action ="{{ route('post.destroy',$obj->id) }}" type="button">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
