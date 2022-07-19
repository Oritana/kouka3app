{{-- 受講生個人詳細表示画面 --}}

@extends('layouts.kouka3')

@section('title', 'Students')

@section('menu_title')
受講生【詳細画面】
@endsection

@section('content')
   <table>
   <tr><th>Name(Age)</th><th>Mail</th></tr>
       <tr>
           <td>{{$item->getData()}}</td>
           <td>{{$item->mail}}</td>
       </tr>
   </table>
@endsection

@section('footer')
University of Washington
@endsection
