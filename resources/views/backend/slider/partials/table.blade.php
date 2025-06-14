<tr>
    <td>{{++$key}}</td>
    <td>{{ ($slider->title) }}</td>
    <td>{!! str_limit($slider->content,47) !!}</td>
    <td>{{ ($slider->first_button_title) }}</td>
    <td>{{ ($slider->second_button_title) }}</td>
       <td>
        <span class="badge">{{ $slider->is_published ? 'Yes' : 'No' }}</span>
       </td>
     <td class="text-right">
      <a href="{{route('slider.edit', $slider->slug)}}" class="btn btn-flat btn-primary btn-xs">
          Edit
      </a>
      <button type="button" data-url="{{ route('slider.destroy', $slider->slug) }}"
              class="btn btn-flat btn-primary btn-xs item-delete">
          Delete
      </button>
  </td>
</tr>
