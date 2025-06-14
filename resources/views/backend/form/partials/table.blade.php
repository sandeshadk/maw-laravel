<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($form->title, 47) }}</td>
    <td>{{ $form->view }}</td>
    <td class="text-center">
        @if($form->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$form->is_published ? 'Yes' : 'No'}}</span>
        @elseif($form->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$form->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        <a href="{{route('form.edit', $form->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{ route('form.destroy', $form->slug) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>
