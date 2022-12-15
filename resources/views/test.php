
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-widthz, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Todo List</title>
  <style>
    html,
    body,
    div,
    span,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    abbr,
    address,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    samp,
    small,
    strong,
    sub,
    sup,
    var,
    b,
    i,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section,
    summary,
    time,
    mark,
    audio,
    video {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      line-height: 1;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
      display: block;
    }

    nav ul {
      list-style: none;
    }

    blockquote,
    q {
      quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
      content: "";
      content: none;
    }

    a {
      margin: 0;
      padding: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    /* change colours to suit your needs */
    ins {
      background-color: #ff9;
      color: #000;
      text-decoration: none;
    }

    /* change colours to suit your needs */
    mark {
      background-color: #ff9;
      color: #000;
      font-style: italic;
      font-weight: bold;
    }

    del {
      text-decoration: line-through;
    }

    abbr[title],
    dfn[title] {
      border-bottom: 1px dotted;
      cursor: help;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* change border colour to suit your needs */
    hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #cccccc;
      margin: 1em 0;
      padding: 0;
    }

    input,
    select {
      vertical-align: middle;
    }

    .flex {
      display: flex;
    }

    .between {
      justify-content: space-between;
    }

    .mb-15 {
      margin-bottom: 15px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .container {
      background-color: #2d197c;
      height: 100vh;
      width: 100vw;
      position: relative;
    }

    .card {
      background-color: #fff;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }

    .title {
      font-weight: bold;
      font-size: 24px;
    }

    .input-add {
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    table {
      text-align: center;
      width: 100%
    }

    tr {
      height: 50px;
    }

    .input-update {
      width: 90%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .button-add {
      text-align: left;
      border: 2px solid #dc70fa;
      font-size: 12px;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-add:hover {
      background-color: #dc70fa;
      border-color: #dc70fa;
      color: #fff;
    }

    .button-update {
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-update:hover {
      background-color: #fa9770;
      border-color: #fa9770;
      color: #fff;
    }

    .button-delete {
      text-align: left;
      border: 2px solid #71fadc;
      font-size: 12px;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-delete:hover {
      background-color: #71fadc;
      border-color: #71fadc;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
            <div class="todo">
        <form action="/todo-introduction/todo/create" method="post" class="flex between mb-30">
          <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">          <input type="text" class="input-add" name="content" />
          <input class="button-add" type="submit" value="追加" />
        </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
                    <tr>
            <td>
              2022-12-12 05:16:57
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=27" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="ああ" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=27" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2022-12-12 12:07:43
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=28" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="あああ" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=28" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2022-12-12 12:07:49
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=29" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="　" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=29" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2022-12-12 12:07:59
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=30" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="＠＠＠" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=30" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2022-12-12 12:08:31
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=31" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="12115131312131" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=31" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2022-12-12 12:08:38
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=32" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="あああ" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=32" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                    <tr>
            <td>
              2022-12-12 12:44:25
            </td>
            <form action="http://54.65.181.123/todo-introduction/todo/update?id=34" method="post">
              <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">              <td>
                <input type="text" class="input-update" value="っj" name="content" />
              </td>
              <td>
                <button class="button-update">更新</button>
              </td>
            </form>
            <td>
              <form action="http://54.65.181.123/todo-introduction/todo/delete?id=34" method="post">
                <input type="hidden" name="_token" value="JuQ94Joiju4z8lP27tu92PAQs0EYOkXAeFkFLIlV">                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
                  </table>
      </div>
    </div>
  </div>
  </div>
</body>

</html>