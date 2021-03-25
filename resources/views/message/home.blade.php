@extends('layouts.app')

@section('content')
<button class="uk-button uk-button-primary uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-push" uk-icon="icon: table"></button>

<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar" data-src="../storage/company/unnamed.png" uk-img> 

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
                                        <img class="uk-border-circle" width="40" height="40" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">
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
                                <h5>Users</h5>
                                <ul class="list-group list-chat-item">
                                    @if($users->count())
                                        @foreach($users as $user)
                                            <li class="chat-user-list">
                                                <a href="{{ route('message.conversation', $user->id )}}">
                                                <!-- <a href="{{ route('message.show', $user->id )}}"> -->
                                                    <div class="chat-image">
                                                        <i class="fa fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away" id="userStatus"></i>
                                                    </div>
                                                    {{ $user->name}}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul> 
                        </div></p>
                    </div>
            
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                    <li class="uk-nav-divider"></li>
                    <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                </ul>
        
    </div>
</div>
</div>


<div class="uk-container">
    <ul class="uk-padding uk-padding-remove-bottom uk-text-lowercase uk-width-expand@m uk-inline uk-light"  uk-tab data-src="../storage/empresas/unnamed.png" uk-img>
        <li class="uk-position-top-left"><a class="uk-link-reset uk-text-lowercase uk-light"  href="#">Convesras</a></li>
        <li class="uk-position-top-center uk-padding-remove-right"><a class="uk-link-reset uk-text-lowercase" href="#" >Mensagens</a></li>
        <li class="uk-position-top-right"><a class="uk-link-reset uk-text-lowercase" href="#" uk-icon="more-vertical"></a></li>
    </ul>

    <ul class="uk-switcher uk-margin">
        <li>
            <div class="uk-width-1-2@m">
                <div class="uk-overflow-auto ">
                    <table class="uk-table uk-table-hover uk-table-small uk-table-middle  ">
                            @if($users->count())
                            @foreach($users as $user)
                            <tbody>
                                <tr>
                                    <td><img class="uk-preserve-width uk-border-circle" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" width="40" alt=""></td>
                                    <td class="uk-table-link  uk-list-divider">
                                        <a class="uk-link-reset" href="{{ route('message.conversation', $user->id )}}">
                                        <!-- <a href="{{ route('message.show', $user->id )}}"> -->
                                            <!-- <div class="chat-image">
                                                <i class="fa fa fa-circle user-status-icon user-icon-{{ $user->id }}" title="away"></i>
                                            </div> -->
                                            {{ $user->name}}
                                        </a>
                                        <!-- <a class="uk-link-reset" href="">{{ $user->name}}</a> -->
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                            @endif
                    </table>
                </div>
            </div>
        </li>

        <li >
            <div>
                <div class="uk-padding-remove-top uk-light uk-width-expand@m">
                    <div class="uk-card uk-card-default uk-width-1-1@m">
                        <div class="uk-card-header uk-section-defaul">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto uk-section-danger">
                                <img class="uk-border-circle" width="40" height="40" src="../../storage/empresas/MO4WXiyMSwWNUFpyvnqZHfJI2imlSTckbytG8N7n.jpg" alt="logo">
                                </div>
                                <div class="uk-width-expand">
                                    <p class="uk-margin-remove-bottom"></p>
                                    <!-- <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p> -->
                                </div>
                            </div>
                        </div>
                    <div class="row chat-row">
                        <div class="chat-section">
                                <div class="uk-height-medium">
                                    <div class="js-wrapper">
                                        <div uk-overflow-auto="selContainer: .uk-height-medium; selContent: .js-wrapper">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="chat-body uk-comment-list" id="chatBody">
                                                    <div class="message-listing " id="messageWrapper">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="chat-body" id="chatBody">
                                <div class="message-listing" id="messageWrapper">
                                </div>
                            </div>
                            <div class="chat-box uk-card-default radius uk-position-bottom">
                                <div class=" radius chat-input bg-white" id="chatInput" contenteditable="">
                                </div>
                                <span class="input-group-btn" style="border-radius: 1000px">
                                    <input type="submit" value="&rang;" class="btn btn-info" style="border-radius: 1000px;">
                                    <input type="hidden" name="env" value="envMsg"/> 
                                </span>
                                    <div class="chat-input-toolbar">
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
                </div>
        </li>

        <li>
            <div class="uk-child-width-1-2 uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-alert-success uk-card-body">Ver conversa</div>
                </div>
                <div>
                    <div class="uk-card uk-alert-warning uk-card-body">Iniciar conversa</div>
                </div>

                <div>
                    <div class="uk-card uk-alert-danger uk-card-body">Voltar a empresa</div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                    <!-- <a href="" class="uk-icon-button uk-button-primary uk-margin-small-right" uk-icon="twitter"></a> -->
                    <a href="" class="uk-icon-button uk-button-primary  uk-margin-small-right" uk-icon="facebook"></a>
                    <a href="" class="uk-icon-button uk-label-success uk-margin-small-right" uk-icon="whatsapp"></a>
                    <a href="" class="uk-icon-button uk-button-default" uk-icon="google-plus"></a>    
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
</div>
@endsection
