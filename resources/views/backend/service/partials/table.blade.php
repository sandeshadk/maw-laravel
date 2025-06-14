<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($service->title, 47) }}</td>

    <td class="text-center">
        @if($service->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$service->is_published ? 'Yes' : 'No'}}</span>
        @elseif($service->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$service->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-center">
        <span class="badge">{{ $service->is_featured ? 'Yes' : 'No' }}</span>
    </td>
    <td class="text-right">
      <!--   <a href="{{route('service.edit', $service->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>   -->      
        <button type="button" data-url="{{ route('service.destroy', $service->slug) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>
