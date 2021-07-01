<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Project Forum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #login {
            position: absolute;
            right: 11%;
        }

        #aanmelden {
            position: absolute;
            right: 2%;
        }


        .navbar {
            color: #202225;
            border: 1px solid black;
            width: 100%;
        }

        .navbar {
            text-align: center;
            color: white;
            text-decoration: none;
            width: 100%;
            background: #2c2f33;
        }



        body{
            margin-top:20px;
            color: #2c2f33;
            text-align: left;
            background-color: #23272a;
        }

        .inner-wrapper {
            position: relative;
            height: calc(100vh - 3.5rem);
            transition: transform 0.3s;
        }
        @media (min-width: 992px) {
            .sticky-navbar .inner-wrapper {
                height: calc(100vh - 3.5rem - 48px);
            }
        }

        .inner-main,
        .inner-sidebar {
            position: absolute;
            top: 0;
            bottom: 0;
            display: flex;
            flex-direction: column;
        }
        .inner-sidebar {
            left: 0;
            width: 235px;
            border-right: 1px solid #23272a;
            background-color: #2c2f33;
            z-index: 1;
        }
        .inner-main {
            right: 0;
            left: 235px;
        }
        .inner-main-footer,
        .inner-main-header,
        .inner-sidebar-footer,
        .inner-sidebar-header {
            height: 3.5rem;
            border-bottom: 1px solid #cbd5e0;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            flex-shrink: 0;
        }
        .inner-main-body,
        .inner-sidebar-body {
            padding: 1rem;
            overflow-y: auto;
            position: relative;
            flex: 1 1 auto;
        }
        .inner-main-body .sticky-top,
        .inner-sidebar-body .sticky-top {
            z-index: 999;
        }
        .inner-main-footer,
        .inner-main-header {
            background-color: #fff;
        }
        .inner-main-footer,
        .inner-sidebar-footer {
            border-top: 1px solid #cbd5e0;
            border-bottom: 0;
            height: auto;
            min-height: 3.5rem;
        }
        @media (max-width: 767.98px) {
            .inner-sidebar {
                left: -235px;
            }
            .inner-main {
                left: 0;
            }
            .inner-expand .main-body {
                overflow: hidden;
            }
            .inner-expand .inner-wrapper {
                transform: translate3d(235px, 0, 0);
            }
        }

        .nav .show>.nav-link.nav-link-faded, .nav-link.nav-link-faded.active, .nav-link.nav-link-faded:active, .nav-pills .nav-link.nav-link-faded.active, .navbar-nav .show>.nav-link.nav-link-faded {
            color: #3367b5;
            background-color: #c9d8f0;
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #467bcb;
        }
        .nav-link.has-icon {
            display: flex;
            align-items: center;
        }
        .nav-link.active {
            color: #467bcb;
        }
        .nav-pills .nav-link {
            border-radius: .25rem;
        }
        .nav-link {
            color: #4a5568;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #36393F;;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .text-white{
            color: white;
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/">Forum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
                <a href="inloggen" id="login" class="btn btn-secondary " role="button" aria-pressed="true">Login</a>
                <a href="aanmelden" id="aanmelden" class="btn btn-secondary " role="button" aria-pressed="true">Aanmelden</a>
        </div>
    </nav>

</header>
<body>
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
<div class="container">
    <div class="main-body p-0">
        <div class="inner-wrapper">
            <!-- Inner sidebar -->
            <div class="inner-sidebar">
                <!-- Inner sidebar header -->
                <div class="inner-sidebar-header justify-content-center">
                    <button class="btn btn-secondary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        NEW DISCUSSION
                    </button>
                </div>

                <!-- Inner sidebar body -->
                <div class="inner-sidebar-body p-0">
                    <div class="p-3 h-100" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -16px;">
                            <div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 16px;">
                                            <nav class="nav nav-pills nav-gap-y-1 flex-column">
                                                <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon active">All Threads</a>
                                                <a href="javascript:void(0)" class="nav-link nav-link-faded has-icon"></a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 234px; height: 292px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 151px; display: block; transform: translate3d(0px, 0px, 0px);"></div></div>
                    </div>
                </div>
            </div>

            <div class="inner-main">
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                    <!-- Post Card -->
                    @foreach($threads as $thread)
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="img/pf.jpg" class="mr-3 rounded-circle" width="50" alt="{{ $thread->user_id }}"/></a>
                                <div class="media-body">
                                    <h6><a href="#" data-toggle="collapse" data-target=".forum-content" class="text-body">{{ $thread->title }}</a></h6>
                                    <p class="text-white">
                                        {{ $thread->description }}
                                    </p>
                                    <p class="text-white"><a href="javascript:void(0)">ADMIN2001(user)</a> reageerde <span class="font-weight-bold">(tijd van post)</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Card -->
                </div>

                <!-- Forum Detail -->
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content">
                    <a href="#" class="btn btn-light btn-sm mb-3 has-icon" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="media forum-item">
                                <a href="javascript:void(0)" class="card-link">
                                    <img src="img/pf.jpg" class="rounded-circle" width="50" alt="User" />
                                </a>
                                <div class="media-body ml-3">
                                    <a href="javascript:void(0)" class="text-secondary">(user)</a>
                                    <small class="text-white ml-2">(Tijd van reactie)</small>
                                    <h5 class="mt-1">(Titel)</h5>
                                    <div class="mt-3 font-size-sm">
                                        <p>(Description)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="media forum-item">
                                <a href="javascript:void(0)" class="card-link">
                                    <img src="img/pf.jpg" class="rounded-circle" width="50" alt="User" />
                                </a>
                                <div class="media-body ml-3">
                                    <a href="javascript:void(0)" class="text-secondary">(user)</a>
                                    <small class="text-muted ml-2">(tijd van reactie)</small>
                                    <div class="mt-3 font-size-sm">
                                        <p>Discription</p>
                                    </div>
                                    <a href="javascript:void(0)" class="text-muted small">(Knop om te reageren)</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- New Thread -->
        <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form id="new-post" action="/threads/create" method="POST">
                        @csrf
                        <input type="hidden" id="user-id" value="1" name="user_id">
                        <div class="modal-header d-flex align-items-center bg-secondary text-white">
                            <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="ForumTitle">Voeg hier uw Titel</label>
                                <input type="text" class="form-control" id="TitleForum" placeholder="Titel" name="title">
                            </div>

                            <div class="form-group">
                                <label for="ForumText">Voeg hier Uw tekst</label>
                                <textarea class="form-control" id="TextForum" rows="3" name="description"></textarea>
                            </div>

                            <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                                <input type="file" class="custom-file-input" id="customFile" multiple="" disabled/>
                                <label class="custom-file-label" for="customFile">Attachment</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-secondary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
