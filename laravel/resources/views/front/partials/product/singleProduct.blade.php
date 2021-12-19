<div class="col-md-8 col-sm-8 col-xs-12">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <!-- single-blog start -->
            <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                    <img class="imgSingle" src="{{ asset("images/product/" . $single->image) }}"
                         alt="{{ $single->alt }}"/>
                </div>
                <div class="post-information">
                    <h2>{{ $single->title }}</h2>
                    <div class="entry-content">
                        <p class="text-justify pl-3" style="line-height: 30px">{{ $single->body }}</p>
                    </div>
                </div>
            </article>
            <div class="clear"></div>
            <!-- single-blog end -->
        </div>
    </div>
</div>

