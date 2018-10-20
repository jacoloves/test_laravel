@extends('layouts.helloapp')

@section('title', 'Person.Edit')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table>
        <form action="/person/edit" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>name: </th><td><input type="text" name="name" id="{{$form->name}}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" id="{{$form->mail}}"></td></tr>
            <tr><th>age: </th><td><input type="number" name="age" id="{{$form->age}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>
@endsection

@section('footer')
copyrught 2018 tanaka
@endsection