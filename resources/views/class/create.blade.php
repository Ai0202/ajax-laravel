<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>投稿テスト</title>
  </head>
  <body>
    <form action="{{ route('store') }}" method="post">
      {!! csrf_field() !!}
      <label>店舗</label>
      <input type="text" name="cls_txt" id="ajaxtxt">
      <button type="submit" name="button">送信</button>
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
  </body>
</html>
