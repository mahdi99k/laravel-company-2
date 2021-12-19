<!-- =======  Start Blog Section ======= -->
<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">

           @forelse($post as $item)
                <!-- Start Left Blog -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="{{ route('home.post' , ['id' => $item->id]) }}">
                                    <img src="{{ asset("images/post/" . $item->image) }}" alt="{{ $item->alt }}">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="comments-type">
                                    <i class="fa fa-comment-o"></i><a href="#">13 comments</a></span>
                                <span class="date-type"><i class="fa fa-calendar"></i>{{ $item->created_at }}</span>
                            </div>
                            <div class="blog-text">
                                <h4>{{ $item->subject }}</h4>
                                <p class="text-justify">{{ \Illuminate\Support\Str::limit($item->body , 200) }}</p>
                            </div>
                            <span>
                  <a href="{{ route("home.post" , ['id' => $item->id]) }}" class="btn btn-primary btn-block p-2 mb-4">Read more</a>
                </span>
                        </div>
                        <!-- Start single blog -->
                    </div>
                    <!-- End Left Blog-->
                @empty
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center">no data</h2>
                    </div>
                @endforelse

            </div>

            {{--<section class="col-6 offset-5">
            {{ $post->links() }}
            </section>--}}

        </div>
    </div>
</div>
<!-- =======  End Blog Section   ======= -->
