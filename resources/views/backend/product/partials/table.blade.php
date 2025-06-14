<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($product->title, 47) }}</td>
    <td class="text-center">
      {{ $product->order }}
    </td>
    <td class="text-center">
        @if($product->is_published =='1')
            <span class="badge" style="background-color: #419645">{{$product->is_published ? 'Yes' : 'No'}}</span>
        @elseif($product->is_published =='0')
            <span class="badge" style="background-color: #f44336">{{$product->is_published ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-center">
        <span class="badge">{{ $product->is_featured ? 'Yes' : 'No' }}</span>
    </td>
    <td class="text-right">
        
        <button type="button" data-url="{{ route('product.destroy', $product->id) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>
