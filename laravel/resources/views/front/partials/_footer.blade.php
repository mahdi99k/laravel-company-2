<!-- =======  Start Footer   ======= -->
<footer>
    <div class="footer-area" style="background-color: #1b1e21;">
        <div class="container">
            <div class="row">
                <!-- Start Social footer -->
            @include('front.partials.footer-related._social'  , ['social' => $social])
            <!-- End Social footer  -->

                <!-- Start Social footer -->
            @include('front.partials.footer-related._info'  , ['info' => $info])
            <!-- End Social footer  -->

                <!-- Start Social footer -->
            @include('front.partials.footer-related._links' , ['link' => $link])
            <!-- End Social footer  -->
            </div>
        </div>
    </div>
    <div class="footer-area-bottom" style="background-color: #111111;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>&copy; Copyright <strong>eBusiness</strong>. All Rights Reserved</p>
                    </div>
                    <div class="credits">Designed by
                        <a href="http://www.elecodeiranzamin.com" target="_blank">MahdiSheikhi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- =======  End Footer     ======= -->
