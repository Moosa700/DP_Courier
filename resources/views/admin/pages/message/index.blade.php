@extends('admin.layout.master')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Chat Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #e0e0e0;
        }

        .whatsapp-container {
            max-width: 768px;
            margin: 20px auto;
            display: flex;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 600px;
            /* Fixed height for the container */
        }

        .chat-list {
            background-color: #f8f8f8;
            width: 35%;
            border-right: 1px solid #ddd;
            overflow-y: auto;
        }

        .chat-area {
            background-color: #fff;
            width: 65%;
            display: flex;
            flex-direction: column;
        }

        .chat-messages {
            overflow-y: auto;
            flex-grow: 1;
            /* Allows messages to take up available space */
            padding: 10px;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            clear: both;
        }

        .message.sent {
            background-color: #dcf8c6;
            align-self: flex-end;
            float: right;
        }

        .message.received {
            background-color: #fff;
            float: left;
        }

        .message-content {
            word-wrap: break-word;
        }

        .chat-header {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .chat-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .message-input {
            border-top: 1px solid #ddd;
            padding: 10px;
            position: sticky;
            /* Make input sticky */
            bottom: 0;
            /* Stick to the bottom */
            background-color: #fff;
            /* Ensure background color */
        }

        .contact-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .contact-item img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .unread-count {
            background-color: #25d366;
            color: white;
            padding: 2px 6px;
            border-radius: 50%;
            font-size: smaller;
            margin-left: auto;
        }
    </style>
</head>

<body>

    <div class="whatsapp-container">
    @if(auth()->user()->user_type == 'admin')
        <div class="chat-list">
       
            @if($agents)
            @foreach($agents as $agent)
            <a href="{{route('admin.show.message',$agent->id)}}" style="text-decoration: none; color:black">
            <div class="contact-item" >
                <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="Contact 1">
                <div style="font-size: larger;">{{$agent->name}}</div>
                <!-- <div class="unread-count">2</div> -->
            </div>
            </a>
            @endforeach
            @endif
           


        </div>
        @endif
        <div class="chat-area">
          
           
            <div class="chat-header">
             @if(auth()->user()->user_type == 'admin')   
            @if($user)
                <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="Contact Profile">
                <div>{{$user->name}}</div>
            @endif
            @endif
            </div>
            
            <div class="chat-messages">
            @if($messages)
            @foreach($messages as $message)
            @if($message->from != 4)
                <div class="message received">
                    <div class="message-content">{{$message->message}}</div>
                </div>
                @endif
                @if($message->from == 4)
                <div class="message sent">
                    <div class="message-content">{{$message->message}}</div>
                </div>
                @endif
            @endforeach
            @endif
            </div>
            
            <form action="{{route('admin.message.send')}}" method="post">
            <div class="message-input">
                <div class="input-group">
                    @if(auth()->user()->user_type == 'admin')
                    @if($user)
                    <input type="hidden" value="{{$user->id}}" name="reciver_id">
                    @endif
                    @else
                    <input type="hidden" value="4" name="reciver_id">
                    @endif
                    @csrf
                    
                    <input type="text" name="message" value="" class="form-control" placeholder="Type a message...">
                    <button class="btn btn-primary" type="submit">Send</button>
                    
                </div>
            </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>


@endsection('content')