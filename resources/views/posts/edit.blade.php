<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <!-- when make edit got to update page -->
  <form  action="/posts/{{$id}}"  method="post"  >
      @csrf
      @method("PATCH")

        <label for="name">name :</label>
        <input
          type="text"
          name="name"
          id="name"
          value="{{$name}}"
        />
        <br /><br />

        <label for="body">Body :</label>
        <input
          type="text"
          name="body"
          id="body"
          value="{{$body}}"
        />
        <br /><br />


        <label for="title">Title :</label>
        <input
          type="text"
          name="title"
          id="title"
          value="{{$title}}"
        />
        <br /><br />
      <input type="submit" value="Edit"  />
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </body>
</html>
