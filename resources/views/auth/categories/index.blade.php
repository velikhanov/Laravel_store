@extends('auth.layouts.app')

@section('admin-css')
<link rel="stylesheet" href="/css/auth/prodindex.css">
@endsection

@section('title-admin', 'Категории')

@section('content-admin')
<div class="container emp-profile">
  <div class="col-md-12">
    @include('inc.flash')
       <h1>Категории</h1>
       <table class="table table-bordered">
           <tbody>
           <tr>
               <th class="text-center">
                   #
               </th>
               <th class="text-center">
                   Название
               </th>
               <th class="text-center">
                   Родительский элемент
               </th>
               <th class="text-center">
                   Действия
               </th>
           </tr>
             @foreach($categories as $category)
               <tr>
                   <td>{{ $category->id }}</td>
                   <td>{{ $category->name }}</td>
                   <td class="text-center">{{ $category->parent->name ?? '-'}}</td>
                   <td class="text-center">
                       <div class="btn-group" role="group">
                           <form method="POST">
                               <a class="btn btn-warning" type="button"
                                  href="{{ route('categories.edit', $category)}}">Редактировать</a>
                               @csrf
                           </form>
                           <form class="ml-1" action="{{ route('categories.destroy', $category)}}" method="POST">
                             @method('DELETE')
                             @csrf
                             <input class="btn btn-danger" type="submit" value="Удалить">
                           </form>
                       </div>
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       <a class="btn btn-success" type="button" href="{{ route('categories.create') }}">Добавить категорию</a>
   </div>
</div>
@endsection
