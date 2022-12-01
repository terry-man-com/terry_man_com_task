<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1 class="index-title">タスク一覧</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>エラー内容</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @foreach ($tasks as $task)
            <div class="delete-button">
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
                    <form action="/tasks/{{ $task->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                    </form>
            </div>
        @endforeach
    <hr>
    <h1>新規論文投稿</h1>
    <form action="/tasks" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">内容</label>
            <textarea name="body" id="" cols="20" rows="2">{{ old('body') }}</textarea>
        </p>

        <input type="submit" value="Create Task">
    </form>
</body>
</html>