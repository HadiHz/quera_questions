<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Quera Image Validation </title>

        <style>
            body {
                justify-content: center;
                display: flex;
            }

            .form {
                width: 20%;
            }

            .text-sm {
                font-size: 12px;
            }

            .text-red {
                color: red;
            }

            .image-input {
                text-align: center;
                border-radius: 15px;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            }

            .image-input input {
                display: none;
            }

            .image-input label {
                display: block;
                color: #FFF;
                background: #000;
                padding: 0.5rem 0.8rem;
                cursor: pointer;
                border-radius: 5px;
            }

            .image-input img {
                max-width: 100%;
                display: none;
                border-radius: 15px;
            }

            .image-input span {
                display: none;
                text-align: center;
                cursor: pointer;
            }

            .btn {
                cursor: pointer;
                color: #FFF;
                background: #000;
                border-radius: 5px;
                font-size: 16px;
                margin: 10px 0;
                box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            }
        </style>
    </head>
    <body>
    <div class="form">
        <form action="{{route("save.image")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image-input">
                <input type="file" name="file" id="file">
                <label for="file" class="image-button"> Choose Image </label>
                <img src="" class="image-preview">
            </div>

            @if ($errors->has('file'))
                <span class="text-sm text-red">
                {{ $errors->first('file') }}
            </span>
            @endif
            <input type="submit" value="send" class="btn">
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/assets/jquery-3.5.1.min.js"></script>
    <script>
        $('#file').on('change', function() {
            $input = $(this);
            if($input.val().length > 0) {
                fileReader = new FileReader();
                fileReader.onload = function (data) {
                    $('.image-preview').attr('src', data.target.result);
                };
                fileReader.readAsDataURL($input.prop('files')[0]);
                $('.image-button').css('display', 'none');
                $('.image-preview').css('display', 'block');
                $('.change-image').css('display', 'block');
            }
        });

        $('.change-image').on('click', function() {
            $control = $(this);
            $('#file').val('');
            $preview = $('.image-preview');
            $preview.attr('src', '');
            $preview.css('display', 'none');
            $control.css('display', 'none');
            $('.image-button').css('display', 'block');
        });
    </script>
    <script>
        window.Echo.channel('events')
            .listen('RealTimeMessage', (e) => {
                console.log('RealTimeMessage: ' + e.message);
                alert(e.message);
            });
    </script>
    </body>
</html>
