<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <div class="page-head-blog">

        <div class="single-blog-page">
            <!-- recent start -->
            <div class="left-blog">
                <h4>recent product</h4>
                <div class="recent-post">
                @forelse($recent as $item)
                    <!-- start single product -->
                        <div class="recent-single-post">
                            <div class="post-img">
                                <a href="{{ route("home.product" , ['id' => $item->id]) }}">
                                    <img class="imgProductRecent" src="{{ asset("images/product/" . $item->image) }}"
                                         alt="{{ $item->alt }}">
                                </a>
                            </div>

                            <div class="pst-content">
                                <p>
                                    <a href="{{ route("home.product" , ['id' => $item->id]) }}">{{ \Illuminate\Support\Str::limit($item->body ,100) }}</a>
                                </p>
                            </div>
                        </div>
                        <!-- End single product -->
                    @empty
                        <h2 class="text-center">no data</h2>
                    @endforelse
                </div>
            </div>
            <!-- recent end -->
        </div>
    </div>
</div>
