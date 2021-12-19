<!-- ======= Start About Section ======= -->


<div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>About eBusiness</h2>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- single-well start-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-left">
                    <div class="single-well">
                        <a href="#">
                            <img src="{{ asset("images/about/" . $about->image) }}" alt="{{ $about->image }}">
                        </a>
                    </div>
                </div>
            </div>
            <!-- single-well end-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="well-middle">
                    <div class="single-well">

                        <h4 class="sec-head">{{ $about->title }}</h4>

                        <p class="text-justify" style="line-height: 25px;font-size: 14px">{{ $about->description }}</p>


                        {{--<ul>
                             <li>
                                 <i class="fa fa-check"></i> Interior design Package
                             </li>

                         </ul>--}}
                    </div>
                </div>
            </div>
            <!-- End col-->
        </div>
    </div>
</div>
<!-- ======= End About Section   ======= -->
