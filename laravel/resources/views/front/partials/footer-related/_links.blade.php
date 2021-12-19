<!-- Start Social footer -->
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4 style="color: whitesmoke;">relational links</h4>

            @forelse ( $link as $item)
                <div class="flicker-img">
                    <a href="{{ $item->link }}" target="_blank" class="text-info">{{ $item->name }}</a>
                </div>
            @empty
                <h4 class="text-center">No Data</h4>
            @endforelse

        </div>
    </div>
</div>
<!-- End Social footer  -->


{{--


<!-- Start Social footer -->
<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="footer-content">
        <div class="footer-head">
            <h4 style="color: whitesmoke;">relational links</h4>
            <div class="flicker-img">
                <a href="#" class="text-info">google</a>
                <a href="#" class="text-info">yahoo</a>
                <a href="#" class="text-info">zicco</a>
                <a href="#" class="text-info">neonLearn</a>
                <a href="#" class="text-info">elecodeiranzamin</a>
                <a href="#" class="text-info">webamooz</a>
            </div>
        </div>
    </div>
</div>
<!-- End Social footer  -->


--}}
