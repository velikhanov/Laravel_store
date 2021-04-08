@extends('auth.layouts.app')

@section('admin-css')
<link rel="stylesheet" href="/css/auth/prodform.css">
@endsection

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
      @foreach ($errors->all() as $error)
           <div class="alert alert-danger text-center mt-2  mb-1">{{$error}}</div>
      @endforeach
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
                               value="@empty($product){{old('name')}}@endempty @isset($product){{ $product->name }}@endisset">
                    </div>
                </div>
                <br>
                    <!-- <div class="input-group row">
                        <label for="name_az" class="col-sm-2 col-form-label">Название az: </label>
                        <div class="col-sm-6">

                            <input type="text" class="form-control" name="name_az" id="name_az"
                                   value="@empty($product){{old('name_az')}}@endempty @isset($product){{ $product->name_az }}@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="name_en" class="col-sm-2 col-form-label">Название en: </label>
                        <div class="col-sm-6">

                            <input type="text" class="form-control" name="name_en" id="name_en"
                                   value="@empty($product){{old('name_en')}}@endempty @isset($product){{ $product->name_en }}@endisset">
                        </div>
                    </div>
                    <br> -->
                <div class="input-group row">
                    <label for="url" class="col-sm-2 col-form-label">Код товара: </label>
                    <div class="col-sm-6">
                      <input type="text" name="url" id="url" value="@empty($product){{old('url')}}@endempty @isset($product){{ $product->url }}@endisset">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                      @if($categories->isEmpty())
                      <select class="form-control">
                        <option>Похоже нет ни одной картегории</option>
                      </select>
                      @else
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
                        @endif
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">

                        <textarea name="description" id="description" cols="72"
                                  rows="7">@empty($product){{old('description')}}@endempty @isset($product){{$product->description}}@endisset</textarea>
                    </div>
                </div>
                <br>
                    <!-- <div class="input-group row">
                        <label for="description" class="col-sm-2 col-form-label">Описание az: </label>
                        <div class="col-sm-6">

                            <textarea name="description_az" id="description_az" cols="72"
                                      rows="7">@empty($product){{old('description_az')}}@endempty @isset($product){{$product->description_az}}@endisset</textarea>
                        </div>
                    </div>
                    <br>
                    <div class="input-group row">
                        <label for="description" class="col-sm-2 col-form-label">Описание en: </label>
                        <div class="col-sm-6">

                            <textarea name="description_en" id="description_en" cols="72"
                                      rows="7">@empty($product){{old('description_en')}}@endempty @isset($product){{$product->description_en}}@endisset</textarea>
                        </div>
                    </div>
                    <br> -->
                <div class="input-group row">
                    <label for="prodimg" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-dark btn-file">
                            Загрузить <input type="file" style="display: none;" name="prodimg[]" id="prodimg" multiple>
                        </label>
                        @isset($product->productImage)
                            <div class="preview d-flex flex-wrap">
                          @foreach($product->productImage as $prodimg)
                            <a class="removeImgBtn" href="#">
                              <img src="{{Storage::url('products/'.$product->id.'/'.$prodimg->path)}}" alt="Preview images">
                              <span>Кликните для удаления</span>
                              <div class="d-none">{{$prodimg->path}}</div>
                              <input type="hidden" name="imgfordel[]">
                            </a>
                          @endforeach
                            </div>
                        @else
                            <div class="preview d-inline"></div>
                        @endisset
                    </div>
                </div>
                <br>

                <div class="input-group row">
                  <label for="category_id" class="col-sm-2 col-form-label">Свойства товара: </label>
                  <div class="row">
                      <div class="col-lg-12">
                          @isset($product)
                            @for ($i=0; $i < (count($product->properties)); $i++)
                            <div id="inputFormRow">
                                <div class="input-group mb-3">
                                      <input type="text" name="properties[{{ $i }}][key]" value="{{ $product->properties[$i]['key'] ?? '' }}" class="form-control m-input ml-3" placeholder="Свойство" autocomplete="off">
                                      <input type="text" name="properties[{{ $i }}][value]" value="{{ $product->properties[$i]['value'] ?? '' }}" class="form-control m-input ml-3" placeholder="Значение" autocomplete="off">
                                  <div class="input-group-append ml-3">
                                      <button id="removeRow" type="button" class="btn btn-danger">Удалить</button>
                                  </div>
                                </div>
                            </div>
                          @endfor
                          <input type="hidden" id="icount" value="{{ count($product->properties) }}">
                        @endisset
                        @empty($product)
                          @if(Session::has('properties'))
                            @for ($i=0; $i < (count(Session::get('properties'))); $i++)
                            <div id="inputFormRow">
                                <div class="input-group mb-3">
                                      <input type="text" name="properties[{{ $i }}][key]" value="{{ Session::get('properties')[$i]['key'] ?? '' }}" class="form-control m-input ml-3" placeholder="Свойство" autocomplete="off">
                                      <input type="text" name="properties[{{ $i }}][value]" value="{{ Session::get('properties')[$i]['value'] ?? '' }}" class="form-control m-input ml-3" placeholder="Значение" autocomplete="off">
                                  <div class="input-group-append ml-3">
                                      <button id="removeRow" type="button" class="btn btn-danger">Удалить</button>
                                  </div>
                                </div>
                            </div>
                          @endfor
                        @endif
                      @endempty
                          <div id="newRow"></div>
                          <button id="addRow" type="button" class="btn btn-info">Добавить поле</button>
                      </div>
                  </div>
                </div>
                <br>
                <div class="input-group row">
                  <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                  <div class="row">
                      <div class="col-lg-12">
                          <input type="text" name="price" @empty($product)value="{{old('price')}}"@endempty @isset($product) value="{{ $product->price }}" @endisset id="price" placeholder="Цена">
                      </div>
                  </div>
                </div>
                <br>
                <div class="input-group row">
                  <label for="status" class="col-sm-2 col-form-label">Статус: </label>
                  <div class="row">
                      <div class="col-lg-12">
                        <select name="status" id="status" class="form-control">
                          <option value="1" @isset($product) @if($product->status == 1) selected @endif @endisset><span class="text-center">В наличии</span></option>
                          <option value="0" @isset($product) @if($product->status == 0) selected @endif @endisset><span>Нет в наличии</span></option>
                        </select>
                      </div>
                  </div>
                </div>
                <br>


                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
@section('pagesjs')
<script src="/js/imgpreview.js"></script>
<script src="/js/addinput.js"></script>
@endsection
