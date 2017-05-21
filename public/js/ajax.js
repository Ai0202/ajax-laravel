
  $(function() {
    $('#ajaxId').on('change', function() {
      var val = $(this).val();

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      $.ajax({
        url:'class/ajax',
        type: 'POST',
        datatype: 'json',
        data: {
          'store': val
        }
      })
      .done(function(data) {
        //成功時の処理
        $('#ajaxClass option').remove();
        $.each(data, function(cls_cd, cls_name) {
          $('#ajaxClass').append($('<option>').text(cls_name).attr('value', cls_cd));
        });
        console.log(data);
      })
      .fail(function(err) {
        //失敗時の処理
        console.log('error');
      });

    });
  });
