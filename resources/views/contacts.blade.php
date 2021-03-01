@extends('layouts.app')

@section('pagescss')
<link rel="stylesheet" href="/css/main/contacts.css">
@endsection

@section('title', 'Контакты')

@section('content')
<section class="section">
  <div class="container">
      <h1 class="text-center text-secondary mt-3 mb-5">Контакты</h1>
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <h3><strong>Телефоны компании:</strong></h3><br>
            <h5><em class="font-italic num">+(994)12-342-75-39</em></h5><br>
            <h5><em class="font-italic num">+(994)12-342-71-32</em></h5>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <h3><strong>Режим работы:</strong></h3>
            <p>Заказы по телефонам, принимаются:
                понедельник – пятница: с 10:00 до 19:00,
                суббота, воскресенье: выходной.
            <h5 class="font-weight-bold font-italic">Заказы через Корзину сайта принимаются круглосуточно и обрабатываются в ближайшее рабочее время</h5></p>
        </div>
      </div>
          <h3 class="text-center font-italic mt-3"><strong>E-mail:</strong></h3>
          <h4 class="text-center mb-3"><em class="textemail">comfotrinc@gmail.com</em></h4>
  </div>
  <iframe class="contgooglemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57789.41632067389!2d49.86885628900876!3d40.4269672743938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d6bd6211cf9%3A0x343f6b5e7ae56c6b!2z0JHQsNC60YMsINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1599558621909!5m2!1sru!2s"></iframe>
</section>
@endsection
