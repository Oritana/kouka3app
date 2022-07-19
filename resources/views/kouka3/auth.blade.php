
{{-- ログインページ --}}
@extends('layouts.kouka3auth')

@section('title', '教員ログインページ')

@section('menubar')
   @parent
   教員ログインページ
@endsection

@section('content')
<p>{{$message}}</p>             {{-- $message変数の出力と、/kouka3/authにpost送信するフォームを用意 --}}
   <form action="/kouka3/auth" method="post">
   <table>
      @csrf
      <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
      <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
      <tr><th></th><td><input type="submit" value="login"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
University of Washington 
@endsection