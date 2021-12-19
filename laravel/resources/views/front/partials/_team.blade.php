<!-- =======  Start Team Section ======= -->
<div id="team" class="our-team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Our special Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start column -->
            @forelse ($team as $item)

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-team-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{ asset("images/team/" . $item->image) }}" width="100%" height="300" alt="{{ $item->alt }}">
                            </a>
                            <div class="team-social-icon text-center">
                                <ul>
                                    <li>
                                        <a href="{{ $item->linkedin }}"><i class="fa fa-linkedin-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->telegram }}"> <i class="fa fa-telegram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $item->instagram }}"><i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4>{{ $item->fullname }}</h4>
                            <p>{{ $item->job }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <section class="col-md-3 col-sm-3 col-xs-12">
                    <h2 class="text-center">no data</h2>
                </section>

        @endforelse
        <!-- End column   -->

        </div>
    </div>
</div>
<!-- =======  End Team Section   ======= -->
