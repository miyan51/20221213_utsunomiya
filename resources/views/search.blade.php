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

      <div class="top">
        <p class="cardttl">タスク検索</p>
        <div class="top-right">
          <p class="login-info">{{$user}}</p>
          <a href="{{ route('logout') }}" class="logout">ログアウト</a>
        </div>
      </div>

      @error('text')
      {{$message}}
      @enderror

      <form action="/search" method="get" class="textform">
        @csrf
        <input type="text" class="input-add" name="search" />
        <select name="kinds" class='tag'>
          <option value="1">家事</option>
          <option value="2">勉強</option>
          <option value="3">運動</option>
          <option value="4">食事</option>
          <option value="5">移動</option>
        </select>
        <input class="button-add" type="submit" value="検索" />
      </form>

      <table>
        <tr>
          <th>作成日</th>
          <th>タスク名</th>
          <th>タグ</th>
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
              <select name="tag" class='tag'>
                <option value="1" @if ( $todo->tag_id===1 ) selected @endif>家事</option>
                <option value="2" @if ( $todo->tag_id===2 ) selected @endif>勉強</option>
                <option value="3" @if ( $todo->tag_id===3 ) selected @endif>運動</option>
                <option value="4" @if ( $todo->tag_id===4 ) selected @endif>食事</option>
                <option value="5" @if ( $todo->tag_id===5 ) selected @endif>移動</option>
              </select>
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
      <a href="{{ route('index') }}" class="return">戻る</a>
    </div>
  </div>
</body>

</html>