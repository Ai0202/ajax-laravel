<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ajaxtest</title>
  </head>
  <body>
    <form class="ajaxTest" action="" method="post">
      {!! csrf_field() !!}
      <label>店舗</label>
      <select id="ajaxId" name="store">
        <option value=""></option>
        @foreach( $stores as $store )
          <option value="{{ $store['st_cd'] }}">{{ $store['st_name'] }}</option>
        @endforeach
      </select>
      <label>分類コード</label>
      <input type="text" name="cls_txt" id="ajaxtxt">
      <label>分類</label>
      <select id="ajaxClass">
        <option value=""></option>
        @foreach( $allClass as $class )
          <option value="{{ $class['cls_cd'] }}">{{ $class['cls_name'] }}</option>
        @endforeach
      </select>
      <button type="submit" name="button">送信</button>
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>

    <select id="ajaxClass">
      <option value=""></option>
      @foreach( $data as $class )
        <option value="{{ $class['cls_cd'] }}">{{ $class['cls_name'] }}</option>
      @endforeach
    </select>
  </body>


</html>
