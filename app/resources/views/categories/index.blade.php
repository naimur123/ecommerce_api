@foreach ($categories as $category)
<tr>

  <td>{{ $category->category_name }}</td>
  <td>{{ $category->Createby }}</td>
  <td>{{ $category->Createdate }}</td>
  <td>{{ $category->Modifiedby }}</td>
  <td>{{ $category->Modifieddate}}</td>
</tr>
@endforeach
