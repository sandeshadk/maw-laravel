<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($location->name,15) }}</td>
    <td>{!!str_limit($location->address,35) !!}</td>
    <td>
    	
    	{{$location->phone}}
    </td>
    <td class="text-center">
        <span class="badge">{{ $location->is_published ? 'Yes' : 'No' }}</span>
</td>

<td class="text-right">
 <a href="{{route('traininglocation.edit', $location->slug)}}" class="btn btn-flat btn-primary btn-xs">
     Edit
 </a>
 <button type="button" data-url="{{ route('traininglocation.delete', $location->slug) }}"
         class="btn btn-flat btn-primary btn-xs item-delete">
     Delete
 </button>
</td>
</tr>
