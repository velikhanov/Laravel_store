@extends('auth.layouts.app')

@isset($product)
    @section('title', 'Редактировать товар ' . $product->name)
@else
    @section('title', 'Создать товар')
@endisset

@section('content-admin')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать товар <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить товар</h1>
        @endisset
        <form method="POST" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset
        >
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">

                        <input type="text" class="form-control" name="name" id="name"
                               value="@isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <br>
                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Название en: </label>
                        <div class="col-sm-6">

                            <input type="text" class="form-control" name="name_en" id="name_en"
                                   value="@isset($product){{ $product->name_en }}@endisset">
                        </div>
                    </div>
                    <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">

                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @isset($product)
                                        @if($product->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">

                        <textarea name="description" id="description" cols="72"
                                  rows="7">@isset($product)@endisset</textarea>
                    </div>
                </div>
                <br>
                    <div class="input-group row">
                        <label for="description" class="col-sm-2 col-form-label">Описание en: </label>
                        <div class="col-sm-6">

                            <textarea name="description_en" id="description_en" cols="72"
                                      rows="7">@isset($product)@endisset</textarea>
                        </div>
                    </div>
                    <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-warning btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <br>

                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Свойства товара: </label>
                    <div class="col-sm-6">

                        <select name="property_id[]" multiple>

                        </select>
                    </div>
                </div>
                <br>


                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
