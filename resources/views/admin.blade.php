@extends('layout')

@section('title', 'Панель администратора')
@section('home_content')
 <h1>Админ панель</h1><br><br>
 <h2>Форма добавление поста</h2>
    <form action="post" method="post">
        @csrf
        <input type="text" name="name" placeholder="Название">
        <input type="text" name="description" placeholder="Описание">

        <input type="submit">
    </form><br>

<h2>Категории</h2>
@foreach($posts as $post)

    <table>
        <tr>
            <th>Название</th>
        </tr>

        <tr>
            <td>{{$post->name}}</td>
            <td>{{$post->description}}</td>
            <td><a href="delete/{{$post->id}}">Удалить</a></td>
        </tr>
    </table>
@endforeach
@endsection
