<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

        <style type="text/css">
            .list-group{
                overflow-y: scroll;
                height: 300px;
            }
        </style>
       
    </head>
    <body>
        <div class="container">
            <div class="row" id="app">
                <div class="offset-3 col-6">
                    <li class="list-group-item active">Chat Room <span class="badge  badge-pill badge-danger">@{{ numberOfUsers }}</span> </li>
                <!-- <div class="badge badge-pill bg-primary">@{{ typing }}</div> -->
                    <ul class="list-group" v-chat-scroll>
                        <message 
                          v-for="value,index in chat.message"
                          :key=value.index
                          :color= chat.color[index]
                          :user = chat.user[index].name
                          :time = chat.time[index]
                          >
                          @{{ value }}
                        </message>
                    </ul>
                    <div class="badge badge-pill bg-primary">@{{ typing }}</div>
                    <input type="text" v-model="message" @keyup.enter="send" class="form-control" placeholder="Type your message here...">
                    <br>
                  <a href='' class="btn btn-warning btn-sm" @click.prevent='deleteSession'>Delete Chats</a>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
