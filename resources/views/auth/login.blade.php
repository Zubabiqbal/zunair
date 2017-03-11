@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <img src="{{ 'images\ndJw69Fhn3LPoCfluEKtYI7h9JvjdNGbpb3bCBdk.jpeg'}}">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <textarea name="name" id="summernote" cols="30" rows="10"></textarea>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        var a = $('#summernote').summernote();
        console.log(window.Laravel.csrfToken);
        csrfToken = window.Laravel.csrfToken;
        summernote.onImageUpload = function(files, csrfToken) {
            var $editor = $(this);
            var data = new FormData();
            data.append('file', files[0]);
            data.append('_token', csrfToken);
            console.log('data', data);
            $.ajax({
                url: 'editor-upload.php',
                method: 'POST',
                data: data,
                processData: false,
                contentType: false,
                success: function(response) {
                    $editor.summernote('insertImage', response);
                }
            });
        }


        $(function() {
        });


    });
</script>

@endsection
