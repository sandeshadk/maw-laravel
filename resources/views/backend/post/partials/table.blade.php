<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($post->title) }}</td>
    <td>{!! str_limit($post->content, 40) !!}</td>
    <td class="text-center">
        <span class="badge">{{ $post->is_published ? 'Yes' : 'No' }}</span>


    <td class="text-right">
        <a href="{{route('post.edit', $post->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{route('post.destroy', $post->slug)}}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>
