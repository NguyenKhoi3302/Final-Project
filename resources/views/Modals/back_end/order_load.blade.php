@foreach($list as $item)
    <tr>
        <th class="text-muted">{{$item->id}}</th>
        <td>{{$item->user_id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->code}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->note}}</td>
        <td>{{$item->admin_note}}</td>
        <td>{{$item->total}}</td>
        <td>
                            <span class="w_content">
                                {{date('H:i:s d-m-Y', strtotime($item->created_at))}}
                            </span>
        </td>
        <td>
            <button class="w_content label-success text-white border-0">
                <a href="/admin/order/detail/{{$item->id}}">Xem chi tiết</a>
            </button>
        </td>
        {{-- <td class="text-center">--}}
        {{-- <a class="mr-3" href="{{url('admin/news/update/'.$news->id)}}">--}}
        {{-- <i class="zmdi zmdi-edit" style="font-size: 20px"></i>--}}
        {{-- </a>--}}
        {{-- <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"
            href="{{url('admin/news/delete/'.$news->id)}}">--}}
        {{-- <i class="zmdi zmdi-delete" style="font-size: 20px"></i>--}}
        {{-- </a>--}}
        {{-- </td>--}}
    </tr>
@endforeach
