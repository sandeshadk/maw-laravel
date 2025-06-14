<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($team->name,15) }}</td>
    <td>{!!str_limit($team->position,35) !!}</td>
    <td>{{$team->view}}</td>
    <td class="text-center">
        <span class="badge">{{ $team->is_published ? 'Yes' : 'No' }}</span>
</td>

<td class="text-right">
 <a href="{{route('team.edit', $team->slug)}}" class="btn btn-flat btn-primary btn-xs">
     Edit
 </a>
 <button type="button" data-url="{{ route('team.destroy', $team->slug) }}"
         class="btn btn-flat btn-primary btn-xs item-delete">
     Delete
 </button>
</td>
</tr>
