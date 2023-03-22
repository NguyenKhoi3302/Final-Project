@foreach($news_list as $news)
    <tr>
        <th class="text-muted">{{$news->id}}</th>
        <td>{{$news->title}}</td>
        <td>
                                    <span class="w_content">
                                        @foreach($author as $aut)
                                            @if($aut->id == $news->user_id)
                                                {{$aut->name}}
                                            @endif
                                        @endforeach
                                    </span>

        </td>
        <td>
            @foreach($cat_list as $cat)
                @if($cat->id == $news->category_id)
                    {{$cat->name}}
                @endif
            @endforeach
        </td>
        <td>
                                    <span class="w_content">
                                        {{date('H:i:s d-m-Y', strtotime($news->created_at))}}
                                    </span>
        </td>
        {{--                                <td>{{$news->summary}}</td>--}}
        <td>
            {{--                                    <span class="label label-success">Paid</span>--}}
            {{$news->view}}
        </td>
        <td>
            <button class="w_content label-success text-white border-0">
                Xem chi tiết
            </button>
        </td>
        <td class="text-center">
            <a href="/admin/news/hot/{{$news->id}}">
                @if($news->hot == 0)
                    <i class="zmdi zmdi-star-outline" style="font-size: 20px"></i>
                @else
                    <i class="zmdi zmdi-star" style="font-size: 20px"></i>
                @endif
            </a>
        </td>
        <td class="text-center">
            <a href="/admin/news/appear/{{$news->id}}">
                @if($news->appear == 0)
                    <i class="zmdi zmdi-eye" style="font-size: 20px"></i>
                @else
                    <i class="zmdi zmdi-eye-off" style="font-size: 20px"></i>
                @endif
            </a>
        </td>
        <td class="text-center">
            <a  class="btn waves-effect waves-light btn-warning" href="{{url('admin/news/update/'.$news->id)}}">
                <i class="zmdi zmdi-edit" style="font-size: 20px"></i>
            </a>
            <a    class="btn waves-effect waves-light btn-danger disabled" onclick="return confirm('Bạn có chắc chắn muốn xoá?')"
               href="{{url('admin/news/delete/'.$news->id)}}">
                <i class="zmdi zmdi-delete" style="font-size: 20px"></i>
            </a>
        </td>
    </tr>
@endforeach
