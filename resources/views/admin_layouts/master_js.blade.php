<script type="text/javascript" src="{{ url('assets/js/jquery.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>
<!-- Isotope - Portfolio Sorting -->
<script type="text/javascript" src="{{ url('assets/js/jquery.isotope.js') }}" type="text/javascript"></script>
<!-- Mobile Menu - Slicknav -->
<script type="text/javascript" src="{{ url('assets/js/jquery.slicknav.js') }}" type="text/javascript"></script>
<!-- Animate on Scroll-->
<script type="text/javascript" src="{{ url('assets/js/jquery.visible.js') }}" charset="utf-8"></script>
<!-- Sticky Div -->
<script type="text/javascript" src="{{ url('assets/js/jquery.sticky.js') }}" charset="utf-8"></script>
<!-- Slimbox2-->
<script type="text/javascript" src="{{ url('assets/js/slimbox2.js') }}" charset="utf-8"></script>
<!-- Modernizr -->
<script src="{{ url('assets/js/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('summernote/summernote.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('#summernote').summernote();
        /*console.log(window.Laravel.csrfToken);
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
        }*/
    });
</script>
