<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tasks edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>新規論文編集</h1>
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
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">内容</label>
            <textarea name="body" id="" cols="20" rows="2">{{ old('body', $task->body) }}</textarea>
        </p>

        <input type="submit" value="更新">
        <button onclick="location.href='/tasks'">一覧に戻る</button>
    </form>
</body>
</html>