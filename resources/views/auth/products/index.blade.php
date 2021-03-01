@extends('auth.layouts.app')

@section('admin-css')
<link rel="stylesheet" href="/css/auth/prodindex.css">
@endsection

@section('title-admin', 'Продукты')

@section('content-admin')
<section class="section">
  <div class="col-md-12">
       <h1>Товары</h1>
       <table class="table">
           <tbody>
           <tr>
               <th>
                   #
               </th>
               <th>
                   Название
               </th>
               <th>
                   Категория
               </th>
               <th>
                   Статус
               </th>
               <!-- <th>
                   Кол-во товарных предложений
               </th> -->
               <!-- <th>
                   Действия
               </th> -->
           </tr>
             @foreach($products as $product)
               <tr>
                   <td>{{ $product->id }}</td>
                   <td>{{ Str::limit($product->name, 10) }}</td>
                   <td>{{ $product->category->name }}</td>
                   <td><i class="{{ $product->IsAvailableIcon}} mr-1"></i>{{ $product->Is_Available_Text}}</td>
                   <td></td>
                   <td>
                       <div class="btn-group" role="group">
                           <form action="" method="POST">
                               <a class="btn btn-success" type="button"
                                  href="">Открыть</a>
                               <a class="btn btn-warning" type="button"
                                  href="">Редактировать</a>
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
</section>
@endsection
