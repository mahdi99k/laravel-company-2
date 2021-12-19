<!-- =======   Start Slider Section   ======= -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">

            @foreach($slider as $item)
                <img src="{{ asset("images/slider/" . $item->image) }}" alt="{{ $item->alt }}"
                     title="#slider-direction-1">
            @endforeach
        </div>


    @foreach ($slider as $item)

        <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction slider-one">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="slider-content">
                                <!-- layer 1 -->
                                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated"
                                     data-wow-duration="2s" data-wow-delay=".2s">
                                    <h2 class="title1">{{ $item->title }}</h2>
                                </div>
                                <!-- layer 2 -->
                                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s"
                                     data-wow-delay=".2s">
                                    <h1 class="title2">{{ $item->caption }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end direction 1 -->

        @endforeach

    </div>
</div>
<!-- =======   End Slider Section     ======= -->
