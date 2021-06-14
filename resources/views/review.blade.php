@extends('layout')
@section('title')Отзывы@endsection
@section('home_content')

    <div class="well">
        <!-- Heading -->
        <h4><i class="fa fa-comments color"></i>&nbsp; Отзывы о работе управляющей компании (Эстет)</h4><!-- Form -->
        <p class="margin-bottom-20">Большая просьба оставлять развернутые отзывы и жалобы о работе управлящей компании, тарифах на услуги, о качестве ремонта и обслуживания дома и прилегающей территории, с указанием подробностей <strong>в формате "где", "когда", "что случилось"</strong>. А также, если присутствуют ошибки в описании или данных. Спасибо.</p>

        <h1>Форма добавления отзыва</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        <form action="review/check" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button type="submit" class="btn btn-warning">Отправить</button>
        </form>
        <h1>Все отзывы</h1>
        @foreach($reviews as $element)
            <div class="alert alert-warning">
                <h3>{{$element->subject}}</h3>
                <b>{{$element->email}}</b>
                <p>{{$element->message}}</p>
            </div>
            @endforeach
    </div>
@endsection
