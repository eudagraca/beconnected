@extends('layouts.app')
@section('content')
<button class="uk-button  uk-button-primary uk-hidden uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-push" uk-icon="icon: table"></button>
<div class=" uk-card-primary "  ></div>
<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-primary">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li class="uk-parent">
                        <a href="#">Parent</a><!-- 
                        <ul class="uk-nav-sub">
                            <li><a href="#">Sub item</a></li> -->
                            <div class="uk-card uk-card-default uk-width-1-1@m">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="40" height="40" src="../../storage/company/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">
                                        </div>
                                        <div class="uk-width-expand">
                                            <p class=" uk-margin-remove-bottom">{{ Auth::user()->name }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> -->
                                </div>
                                <div class="uk-card-footer">
                                    <a href="#" class="uk-button uk-button-text">Read more</a>
                                </div>
                            </div><!-- 
                            <li><a href="#">Sub item</a></li>
                        </ul> -->
                    </li>
                    <li class="uk-nav-header">Header</li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                    
                    <div class="uk-card uk-card uk-card-body">
                        <div class="uk-card-badge uk-label">Badge</div>
                        <h3 class="uk-card-title">Title</h3>
                        <p><div class="row chat-row">
                        <div class="">
                            <div class="users">
                                <h5>Users</h5>

                                <ul class="list-group list-chat-item"><p>
                                    @if($users->count())
                                        @foreach($users as $user)
                                            <li class="chat-user-list
                                                @if($user->id == $friendInfo->id) active @endif">
                                                <a href="{{ route('message.conversation', $user->id) }}">
                                                    <div class="chat-image">
                                                        <img class="uk-border-circle" width="40" height="40" src="../../storage/company/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">
                                                        <i class="fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                                    </div>

                                                    <div class="chat-name font-weight-bold">
                                                        {{ $user->name }}
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </p></ul>
                            </div>
                        </div></p>
                    </div>
            
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                </ul>
            </div>
        </div>


    <div class="uk-container" >
    <ul class="uk-padding uk-list uk-inline uk-button-primary  uk-width-expand@m uk-inline uk-light " data-src="../storage/company/unnamed.png" uk-img>
        <li class="uk-position-top-left uk-padding-remove-bottom"><a class="uk-link-reset uk-text-lowercase"  href="{{ route('message.home') }}"><div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto uk-section-danger">
                <a href="{{ route('message.home') }}" class="uk-icon-link uk-icon-button uk-button-default" uk-icon="arrow-left"></a>
                    <img class="uk-border-circle" width="40" height="40" src="../../storage/company/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">
                </div>
                <div class="uk-width-expand uk-padding-remove-bottom">
                    <p class="uk-margin-remove-bottom">{{ $friendInfo->name }}</p>
                    <!-- <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p> -->
                </div>
            </div>
            </a></li>
        <!-- <li class="uk-position-top-center uk-padding-remove-right"><a class="uk-link-reset" href="" >Mensagens</a></li> -->
        <li class="uk-position-top-right"><a class="uk-link-reset" href="" uk-icon="more-vertical"></a></li>
    </ul>
    <hr>


    <div class="uk-card uk-card-default uk-width-1-1@m">
    <div class="row chat-row">
        <div class="chat-section">
                <div class="uk-height-medium" data-src="../storage/company/unnamed.png" uk-img>
                    <div class="js-wrapper">
                        <div uk-overflow-auto="selContainer: .uk-height-medium; selContent: .js-wrapper">
                            <div class="uk-grid-small" uk-grid >
                                <div class="chat-body uk-comment-list uk-clearfix" id="chatBody" data-src="../storage/company/unnamed.png" uk-img>
                                    <div class="uk-clearfix message-listing uk-padding-bottom uk-width-expand@m" id="messageWrapper">

                                     
                                            <?php foreach($message as $row){?>

                                            <?php }?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            <div class="chat-box uk-container uk-card-default uk-position-bottom uk-position-fixed uk-width-1-1@m">
                <div class=" chat-input uk-container bg-white" id="chatInput" contenteditable="">
                </div>


                    <div class="chat-input-toolbar uk-container">
                    <button title="Add File" class="btn btn-light btn-sm btn-file-upload">
                        <i class="fa fa-paperclip"></i>
                    </button> |

                    <button title="Bold" class="btn btn-light btn-sm tool-items"
                            onclick="document.execCommand('bold', false, '');">
                        <i class="fa fa-bold tool-icon"></i>
                    </button>

                    <button title="Italic" class="btn btn-light btn-sm tool-items"
                            onclick="document.execCommand('italic', false, '');">
                        <i class="fa fa-italic tool-icon"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function (){
            let $chatInput = $(".chat-input");
            let $chatInputToolbar = $(".chat-input-toolbar");
            let $chatBody = $(".chat-body");
            let $messageWrapper = $("#messageWrapper");


            let user_id = "{{ auth()->user()->id }}";
            let ip_address = '127.0.0.1';
            let socket_port = '8005';
            let socket = io(ip_address + ':' + socket_port);
            let friendId = "{{ $friendInfo->id }}";

            socket.on('connect', function() {
                socket.emit('user_connected', user_id);
            });

            socket.on('updateUserStatus', (data) => {
                let $userStatusIcon = $('.user-status-icon');
                $userStatusIcon.removeClass('text-success');
                $userStatusIcon.attr('title', 'Away');

                $.each(data, function (key, val) {
                    if (val !== null && val !== 0) {
                        let $userIcon = $(".user-icon-"+key);
                        $userIcon.addClass('text-success');
                        $userIcon.attr('title','Online');
                    }
                });
            });

            $chatInput.keypress(function (e) {
               let message = $(this).html();
               if (e.which === 13 && !e.shiftKey) {
                   $chatInput.html("");
                   sendMessage(message);
                   return false;
               }
            });

            function sendMessage(message) {
                let url = "{{ route('message.send-message') }}";
                let form = $(this);
                let formData = new FormData();
                let token = "{{ csrf_token() }}";

                formData.append('message', message);
                formData.append('_token', token);
                formData.append('receiver_id', friendId);

                appendMessageToSender(message);

                $.ajax({
                   url: url,
                   type: 'POST',
                   data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                   success: function (response) {
                       if (response.success) {
                           console.log(response.data);
                       }
                   }
                });
            }

            function appendMessageToSender(message) {
                let name = '{{ $myInfo->name }}';
                let image = '<img class="uk-border-circle" width="40" height="40" src="../../storage/company/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">';

                let userInfo = '<div class="col-md-12 user-info">\n' +
                    '<div class="chat-image">\n' + image +
                    '</div>\n' +
                    '\n' +
                    '<div class="chat-name font-weight-bold">\n' +
                    name +
                    '<span style="font-family: arial; font-size: 8px;" class="small time text-gray-500" title="'+getCurrentDateTime()+'">\n' +
                    getCurrentTime()+'</span>\n' +
                    '</div>\n' +
                    '</div>\n';

                let messageContent = '<div><div  style="border-radius: 10px; font-size: 15px;   padding: 10px; max-width: 80%; background-color: #36b9cc; box-shadow: #333 0px 0px 0px;  display: table; margin: 20px;" class=" uk-card uk-card-default uk-card-body uk-padding-remove-bottom message-content">\n' +
                    '                            <div class="message-text uk-comment-body uk-padding-remove-bottom">\n' + message +
                    '                            </div>\n' +
                    '                            <span align="left" style="font-family: arial; font-size: 8px;" class="small time text-gray-500" title="'+getCurrentDateTime()+'">\n' +
                    getCurrentTime()+'</span>\n' +
                    '                             </div></div>';


                let newMessage = '<div class="row uk-float-right message align-items-right col-md-9">'
                     + messageContent +
                    '</div>';

                $messageWrapper.append(newMessage);
            }

            function appendMessageToReceiver(message) {
                let name = '{{ $friendInfo->name }}';
                let image = '<img class="uk-border-circle" width="40" height="40" src="../../storage/company/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">';

                let userInfo = '<div class="col-md-12 user-info ">\n' +
                    '<div class="chat-image">\n' + image +
                    '</div>\n' +
                    '\n' +
                    '<div class="chat-name font-weight-bold">\n' +
                    name +
                    '<span style="font-family: arial; font-size: 8px;" class="small time text-gray-500" title="'+dateFormat(message.created_at)+'">\n' +
                    timeFormat(message.created_at)+'</span>\n' +
                    '</div>\n' +
                    '</div>\n';

                let messageContent = '<div><div style="border-radius: 10px; font-size: 15px; padding: 10px; padding-left: 10px; max-width: 80%; background-color: #EAEAEA; box-shadow: #333 0px 0px 0px; display:table; margin: 20px;" class="uk-card uk-card-default uk-card-body uk-padding-remove-bottom  message-content">\n' +
                    '                            <div class="message-text uk-comment-body uk-padding-remove-bottom">\n' + message.content +
                    '                            </div>\n' +
                    '                            <span style="font-family: arial; font-size: 8px;" class="small time text-gray-500" title="'+dateFormat(message.created_at)+'">\n' +
                    timeFormat(message.created_at)+'</span>\n' +
                    '                        </div></div>';


                let newMessage = '<div class=" uk-float-left row message uk-width-expand@m">'
                     + messageContent +
                    '</div>';

                $messageWrapper.append(newMessage);
            }

            socket.on("private-channel:App\\Events\\PrivateMessageEvent", function (message)
            {
               appendMessageToReceiver(message);
            });

        });
    </script>
@endpush