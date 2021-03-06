@extends("site_layouts.app")
@section("content")
<table>
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>User Email</th>

        <th>Name</th>
        <th>Body</th>
        <th>Title</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>


    </tr>

<!-- this is key on view -->
@foreach( $posts as $post)
<tr>

<td>{{$post->id}}</td>

<!-- to get from user name as we make inner join -->
<td>{{$post->user->name}}</td>

<!-- to get from user email as we make inner join -->
<td>{{$post->user->email}}</td>
<td>{{$post->name}}</td>
<td>{{$post->body}}</td>
<td>{{$post->title}}</td>
<td>{{$post->created_at}}</td>
<td>{{$post->updated_at}}</td>



<td><a href="/posts/{{$post['id']}}">Show</a></td>
<td><a href="/posts/{{$post['id']}}/edit">Edit</a></td>
<td><form action="/posts/{{$post['id']}}" method="post" >
      @csrf
      @method('DELETE')
<input type="submit" name="delete" value="Delete">
</form></td>

</tr>
@endforeach

</table>

<a href="/posts/create">Add New Post</a>

@endsection
