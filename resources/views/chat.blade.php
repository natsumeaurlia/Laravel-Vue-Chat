<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chatstyle.css') }}">
</head>

<body>
    {{-- <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4">
                <ul class="list-group" id="chat-area" v-chat-scroll >
                    <message color='warning' v-for="(value,index) in chat.message" :key="index">@{{ value }}</message>
                </ul>
                <input type="text" class="form-controll" placeholder="メッセージ" v-model="message" v-on:keyup.enter='send'>
            </div>
        </div>
    </div> --}}
    <div class="d-flex justify-content-center container-fluid h-100" id="app">
        <div class="col-md-8 col-xl-6 chat">
            <div class="card" v-chat-scroll>
                <div class="card-body msg_card_body">
                <message v-for="(value,index) in chat.message" :key="index">@{{ value }}</message>
            </div>
            <div class="card-footer">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                        </div>
                        <textarea name="" class="form-control type_msg" placeholder="メッセージ" v-model="message" v-on:keyup.enter='send'></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>

</html>