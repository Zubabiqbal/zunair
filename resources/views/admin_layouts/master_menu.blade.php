
<div id="hornav" class="bottom-border-shadow">
    <div class="container-fluid border-bottom">
        <div class="row">
            <div class="col-md-8 no-padding">
                <div class="visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href='{{ url('admin/home') }}' class="fa-home">Home</a>
                        </li>
                        <li>
                            <span class="fa-arrow-left">Slider</span>
                            <ul>

                                <li>
                                    <a href="{{ url('admin/sliders/create') }}">New Slider Image</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/sliders/') }}">All</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href='{{ url('admin/category') }}' class="fa-gears">Categories</a>
                        </li>
                        <li>
                            <span class="fa-copy">Pages</span>
                            <ul>
                                @foreach($defaultPages as $page)
                                    <li>
                                        <a href="{{ url('admin/default-page/'.str_slug($page)) }}">{{ $page }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <span class="fa-font">Blog</span>
                            <ul>
                                <li>
                                    <a href="{{ url('admin/page/create') }}">New Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/page') }}">All blogs</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 no-padding">
                <ul class="social-icons pull-right">
                    <li class="social-rss">
                        <a href="#" target="_blank" title="RSS"></a>
                    </li>
                    <li class="social-twitter">
                        <a href="#" target="_blank" title="Twitter"></a>
                    </li>
                    <li class="social-facebook">
                        <a href="#" target="_blank" title="Facebook"></a>
                    </li>
                    <li class="social-googleplus">
                        <a href="#" target="_blank" title="Google+"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>