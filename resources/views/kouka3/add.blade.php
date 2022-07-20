{{-- 受講生新規登録画面 --}}

@extends('layouts.kouka3')

@section('title', 'Students')

@section('menu_title')
受講生【新規登録画面】
@endsection

@section('content')
@if (count($errors) > 0)                  
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/create" method="post">  {{-- 新規登録クリック後、add処理で追加 --}}
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">    {{-- 隠しフィールドでuserのidも送る --}}
   <table>
      @csrf   {{-- ユーザデータ入力欄 --}}
    <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr> {{--   {{old('name'))}}  は、入力値を保持 --}}
    <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
    <tr><th>age: </th><td><input type="number" name="age" value="{{old('age')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>  
   </table>
   </form>
@endsection

@section('footer')
University of Washington
@endsection
