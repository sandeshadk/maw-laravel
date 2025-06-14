<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($downloads->title, 47) }}</td>

    
    <td class="text-center">
        @if($downloads->is_published =='1')
            <span class="btn-primary btn-success">{{$downloads->is_published ? 'Yes' : 'No'}}</span>
        @elseif($downloads->is_published =='0')
            <span class="btn-primary btn-danger">{{$downloads->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>

    <td class="text-right">
        <a href="{{route('download.edit', $downloads->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{ route('download.destroy', $downloads->slug) }}"
                class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>

</tr>
