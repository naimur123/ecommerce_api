@foreach ($categories as $category)
<tr>

  <td>{{ $category->id }}</td>
  <td>{{ $category->name }}</td>
  <td>{{ $category->details }}</td>
  <td>{{ $category->remarks }}</td>
  <td>{{ $category->status_id }}</td>
  <td>{{ $category->Createby }}</td>
  <td>{{ $category->Createdate }}</td>
  <td>{{ $category->Modifiedby }}</td>
  <td>{{ $category->Modifieddate}}</td>
</tr>
@endforeach
