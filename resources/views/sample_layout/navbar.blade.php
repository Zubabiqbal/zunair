<div id="hornav" class="bottom-border-shadow">
    <div class="container no-padding border-bottom">
        <div class="row">
            <div class="col-md-8 no-padding">
                <div class="visible-lg">
                    <ul id="hornavmenu" class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/') }}" class="fa-home active">Home</a>
                        </li>
                        <li>
                            <span class="fa-th">Products</span>
                            <ul>
                               @foreach($categories as $category)
                                <li class="{{ count($category->children) ?  'parent' : ''}}">
                                    <span>{{ $category->title }}</span>
                                    @if(count($category->children))
                                        <ul>
                                            @foreach($category->children as $child)
                                                <li>
                                                    <a href="{{ ($child->products()->count())? url('/category-products/'.$child->id): '#' }}">{{ $child->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <span class="fa-font ">Blog</span>
                            <ul>
                                <li>
                                    <a href="blog-list.html">Blog</a>
                                </li>
                                <li>
                                    <a href="blog-single.html">Blog Single Item</a>
                                </li>
                            </ul>
                        </li>
                        @foreach($defaultPages as $page)
                            @if($page != 'introduction')
                            <li>
                                <a href="{{ url('/') }}">{{ $page }}</a>
                            </li>
                            @endif
                        @endforeach
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
  