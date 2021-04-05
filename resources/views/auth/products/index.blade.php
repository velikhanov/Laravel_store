@extends('auth.layouts.app')

@section('admin-css')
<link rel="stylesheet" href="/css/auth/prodindex.css">
@endsection

@section('title-admin', 'Продукты')

@section('content-admin')
<div class="container emp-profile">
  <div class="col-md-12">
    @include('inc.flash')
       <h1>Товары</h1>
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
                   Категория
               </th>
               <th class="text-center">
                   Статус
               </th>
               <th class="text-center">
                   Действия
               </th>
           </tr>
             @foreach($products as $product)
               <tr>
                   <td>{{ $product->id }}</td>
                   <td><!--<a href="/{{ $product->category->code }}/{{ $product->category->url }}/{{ $product->url }}">-->{{ Str::limit($product->name, 10) }}<!--</a>--></td>
                   <td>{{ $product->category->name }}</td>
                   <td><i class="{{ $product->IsAvailableIcon}} mr-1"></i>{{ $product->Is_Available_Text}}</td>
                   <td class="text-center">
                       <div class="btn-group" role="group">
                           <form action="" method="POST">
                               <a class="btn btn-success" type="button"
                                  href="/{{ $product->category->code }}/{{ $product->category->url }}/{{ $product->url }}">Открыть</a>
                               <a class="btn btn-warning" type="button"
                                  href="{{ route('products.edit', $product)}}">Редактировать</a>
                               @csrf
                               <input class="btn btn-danger" type="submit" value="Удалить"></form>
                       </div>
                   </td>
               </tr>
               @endforeach
           </tbody>
       </table>
       <a class="btn btn-success" type="button" href="{{ route('products.create') }}">Добавить товар</a>
   </div>
</div>
@endsection
