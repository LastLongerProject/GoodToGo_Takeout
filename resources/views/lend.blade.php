@extends('partials/main')
@section('title','查詢使用者')
@section('content')
<div class="container disable-select">

	<form role="form" id="lendform">
		{{ csrf_field() }}
        <div class="form-group col-md-4 col-md-offset-4 tel">
          <label for="tel" class="gtg-title">使用者手機號碼</label>
          <input type="tel" id="tel" class="form-control gtg-input" placeholder="手機號碼 ex.0900-000-000" maxlength="10" minlength="10" required>
        </div>
        <div class="form-group col-md-4 col-md-offset-4 num container-hidden">
          <label for="num" class="gtg-title">杯子編號</label>
          <input type="tel" class="form-control gtg-input" id="num" placeholder="杯子編號" maxlength="10" minlength="1" required>
        </div>
        <div class="col-md-4 col-md-offset-4">
         <button type="submit" class="gtg-button button-small container-hidden" id="lendsend-step2">確定</button>
        <button type="submit" class="gtg-button button-small" id="lendsend">檢查</button>
        </div>
      </form>
</div>
@section('js')
<script>
    $('#lendsend').click(function(event) {
        if ($('#tel').val() == '') {
            new Noty({
                type: 'error',
                layout: 'bottomCenter',
                text: '請填寫手機號碼',
                timeout: 2000,
                theme: 'nest',
                animation: {
                    open: 'animated fadeInUp', // Animate.css class names
                    close: 'animated fadeOutDown' // Animate.css class names
                }
            }).show();
            return false;
            event.preventDefault();
        }
        event.preventDefault();
        var $phone = $('#tel').val();

        $.ajax({
            url: 'lendPhoneCheck',
            type: 'POST',
            dataType: 'json',
            data: {
                phone: $phone
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('.num').fadeIn('2000', function() {
                    $(this).removeClass('.container-hideden');
                    $('#tel').attr('disabled', 'disabled');
                    $('#lendsend-step2').removeClass('container-hidden');
                    $('#lendsend').addClass('container-hidden');
                });
                new Noty({
                    type: 'success',
                    layout: 'bottomCenter',
                    text: response.success,
                    timeout: 2000,
                    theme: 'nest',
                    animation: {
                        open: 'animated fadeInUp', // Animate.css class names
                        close: 'animated fadeOutDown' // Animate.css class names
                    }
                }).show();
            },
            error: function(response) {

                var n = new Noty({
                    type: 'error',
                    layout: 'bottomCenter',
                    text: response.responseJSON.error + '<br>' + $phone,
                    buttons: [
                        Noty.button('是', 'btn btn-success info-btn', function() {
                            n.close();
                            $.ajax({
                                url: 'customerCreate',
                                type: 'POST',
                                dataType: 'json',
                                data: {
                                    phone: $phone
                                },
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function(response) {
                                    $('.num').fadeIn('2000', function() {
                                        $(this).removeClass('.container-hideden');
                                        $('#tel').attr('disabled', 'disabled');
                                        $('#lendsend-step2').removeClass('container-hidden');
                                        $('#lendsend').addClass('container-hidden');
                                    });
                                    new Noty({
                                        type: 'success',
                                        layout: 'bottomCenter',
                                        text: response.success,
                                        timeout: 1000,
                                        theme: 'nest',
                                        animation: {
                                            open: 'animated fadeInUp', // Animate.css class names
                                            close: 'animated fadeOutDown' // Animate.css class names
                                        }
                                    }).show();
                                },
                                error: function(response) {

                                    new Noty({
                                        type: 'error',
                                        layout: 'bottomCenter',
                                        text: response.responseJSON.error,
                                        timeout: 1500,
                                        theme: 'nest',
                                        animation: {
                                            open: 'animated fadeInUp', // Animate.css class names
                                            close: 'animated fadeOutDown' // Animate.css class names
                                        }
                                    }).show();
                                },
                            })




                        }, {
                            id: 'button1',
                            'data-status': 'ok'
                        }),

                        Noty.button('否', 'btn btn-danger info-btn', function() {
                            n.close();
                        })
                    ],
                    theme: 'nest',
                    animation: {
                        open: 'animated fadeInUp', // Animate.css class names
                        close: 'animated fadeOutDown' // Animate.css class names
                    }
                }).show();
            },
        })

    });



    $('#lendsend-step2').click(function(event) {

        var $phone = $('#tel').val();
        var $number = $('#num').val();
        if ($('#tel').val() == '' || $('#num').val() == '') {
            new Noty({
                type: 'error',
                layout: 'bottomCenter',
                text: '請填寫杯子編號',
                timeout: 2000,
                theme: 'nest',
                animation: {
                    open: 'animated fadeInUp', // Animate.css class names
                    close: 'animated fadeOutDown' // Animate.css class names
                }
            }).show();
            return false;
            event.preventDefault();
        }
        event.preventDefault();
        $.ajax({
            url: 'lendContainerCreate',
            type: 'POST',
            dataType: 'json',
            data: {
                phone: $phone,
                number: $number
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#num').val('');
                new Noty({
                    type: 'success',
                    layout: 'bottomCenter',
                    text: response.success,
                    timeout: 1500,
                    theme: 'nest',
                    animation: {
                        open: 'animated fadeInUp', // Animate.css class names
                        close: 'animated fadeOutDown' // Animate.css class names
                    }
                }).show();
            },
            error: function(response) {

                new Noty({
                    type: 'error',
                    layout: 'bottomCenter',
                    text: response.responseJSON.error,
                    timeout: 1500,
                    theme: 'nest',
                    animation: {
                        open: 'animated fadeInUp', // Animate.css class names
                        close: 'animated fadeOutDown' // Animate.css class names
                    }
                }).show();
            },

        });
    });
</script>
@stop

@stop