@extends('layout')
@section('title', 'Редактировнаие заявки')


    <h1>Редактирование фирмы: {{ $post['name'] }}</h1>
    <form action="/edit" method="post">
        @csrf
        <label for="name">Название</label>
        <input type="text" name="name" id="name" placeholder="{{ $post['name'] }}">
        <br>
        <br>
        <label for="email">Описание</label>
        <input type="text" name="description" id="email" placeholder="{{ $post['description'] }}">
        <br>
        <br>

        <label for="status">Статус</label>
        <select name="status_id" id="status">
            @foreach($categories as $category)
                <option>{{ $category['id'] }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button type="submit">Изменить</button>
    </form>
    <br>
    <br>
    <a href="{{ route('admin') }}">Назад</a>

