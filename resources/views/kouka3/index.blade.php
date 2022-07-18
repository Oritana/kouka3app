@extends('layouts.kouka3')

@section('title', 'Students')

@section('menu_title')
受講生【一覧画面】
@endsection

@section('content')
    <form action="/kouka3/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="検索">
    </form>
   <a href="/kouka3/add">新規登録</a>
   <table>
   <tr><th>Name(Age)</th><th>Mail</th><th>Select</th><th>Update</th><th>Delete</th></tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
           <td><a href="/kouka3/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/kouka3/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/kouka3/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
@endsection

@section('footer')
University of Washington 
@endsection
