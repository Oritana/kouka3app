{{-- 受講生一覧表示画面 --}}

@extends('layouts.kouka3')
<style>
    .pagination { front-size:10pt;}
    .pagination li {display:inline-block}
</style>

@section('title', 'Students')

@section('menu_title')
受講生【一覧画面】
@endsection

@section('content')
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
<form action="{{ url('/logout') }}" method="post">
    {{ csrf_field() }}
    <button type="submit"><font size="3">logout</font></button>
</form>
@endif

    @csrf
    </form>
   <a href="/kouka3/add">新規登録</a>
   <table>
   <tr><th>Student-ID : Name(Age)</th><th>Mail</th><th>Select</th><th>Update</th><th>Delete</th></tr>
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
   {{$items->links()}}  {{-- ペジネーション --}}
@endsection

@section('footer')
University of Washington 
@endsection
