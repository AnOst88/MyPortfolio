@extends('layout')
@section ('title')Форма обратной связи @endsection
@section('main_content')
<div class="contactwrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1>Мои контакты:</h1>
        <h4>Страна/город: Украина, Одесса</h4>
        <h4><a href="tel:+380734056114">+380734056114</a></h4>
        <h4><a href='mailto:AnOst3@gmail.com'>AnOst3@gmail.com</a></h4>
        <h4><a href='https://github.com/AnOst88' target='_blank'>github.com/AnOst88</a></h4>
      </div>
    </div>
  </div>
  <!-- /container -->
</div>
<div id="contact" class='contact-wrapper'>
  <div class="container">
    <div class="row">
      <div class="col-12 ">
        <h2 class="centered">Тут можно оставить мне сообщение</h2>
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
          @csrf
          <div class="form-group">
            <input type="name" name="name" class="form-control" id="contact-name" placeholder="Ваше имя" data-rule="minlen:4" data-msg="Пожалуйста введите хотя бы 4 символа">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="contact-email" placeholder="Ваш Email" data-rule="email" data-msg="Введите валидный Email">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Тема" data-rule="minlen:4" data-msg="Пожалуйста введите хотя бы 4 символа">
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="contact-message" placeholder="Сообщение" rows="5" data-rule="required" data-msg="Пожалуйста оставьте сообщение"></textarea>
            <div class="validate"></div>
          </div>
          <div class="loading"></div>
          <div class="error-message"></div>
          <div class="sent-message">Ваше сообщение отправленно. Спасибо!</div>
          <div class="form-send">
            <button type="submit" class="btn btn-warning">Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection