
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
    <link rel="stylesheet" href="/css/reset.css" />
  <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="cardttl">Todo List</p>
            <div class="todo">
              @error('text')
              {{$message}}
              @enderror
        <form action="/todos" method="post" class="textform">
          @csrf     
           <input type="text" class="input-add" name="text" />
          <input class="button-add" type="submit" value="追加" />
        </form>

        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach ($todos as $todo)
           <tr>
            <td>
                  {{ $todo->created_at }}     
            </td>
            <form action="/edit/{{ $todo->id }}" method="post">
              @csrf 
              <td>
                <input type="text" class="input-update" value="{{ $todo->text }}" name="text" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            
              <form action="/delete/{{ $todo->id }}" method="post">
                @csrf 
                <td>
              <button class="button-delete">削除</button>
               </td>
              </form>
            
          </tr>
           @endforeach
                  </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>
