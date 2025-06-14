<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($photo->title) }}</td>
    <td>{{ $photo->view}}</td>
    <td class="text-center">
        <span class="badge">{{ $photo->is_published ? 'Yes' : 'No' }}</span>
</td>

<td class="text-right">
 <a href="{{route('photo.edit', $photo->id)}}" class="btn btn-flat btn-primary btn-xs">
     Edit
 </a>
 <button type="button" data-url="{{ route('photo.destroy', $photo->id) }}"
         class="btn btn-flat btn-primary btn-xs item-delete">
     Delete
 </button>
</td>