{{-- 受講生情報更新画面 --}}

@extends('layouts.kouka3')

@section('title', 'Students')

@section('menu_title')
受講生【更新画面】
@endsection

@section('content')
@if (count($errors) > 0)    {{-- $errors変数の要素数をcountで調べ、ゼロよりも大きい場合は表示する --}}
<div>
    <ul>
        @foreach ($errors->all() as $error)    {{-- all()を使って配列として$errorに取り出す --}}
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/kouka3/update" method="post">  {{-- 更新をクリック後、update処理を行い一覧表示 --}}
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">   {{-- "hidden"隠しフィールドで主キー(id)も送信／valueに$itemを設定 --}}
      <tr><th>name: </th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>   {{-- $itemに更新するレコードの値を設定しておけば --}}
      <tr><th>mail: </th><td><input type="text" name="mail" value="{{$item->mail}}"></td></tr>   {{-- その値が表示されるよになる --}}
      <tr><th>age: </th><td><input type="int" name="age" value="{{$item->age}}"></td></tr>
      <tr><th></th><td><input type="submit" value="更新"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
University of Washington
@endsection
