@section('css')
    <link rel="stylesheet" href="{{ asset("toast/dist/jquery.toast.min.css") }}"/> {{--plugin alert msg toast jquery--}}
@endsection

<!-- =======  Start Contact Area ======= -->
<div class="contact-area">
    <div class="contact-inner area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center"><h2>Contact us</h2></div>
                </div>
            </div>

            <div class="row" id="contact">
                <div class="col-lg-10 offset-1 ">
                    <div class="form contact-form">
                        <div id="errormessage"></div>
                        {{--<form action="{{ route('contact.ajax') }}" id="form" method="post" role="form" class="contact-form">--}}
                        <form action="{{ route("contact.ajax") }}" id="form" method="post">
                            @csrf {{-- security ++ , input hidden , token=""  <input type="hidden" name="_token" value="Iy2hfrfr...">--}}

                            <div class="form-group">
                                <input type="text" style="border: 2px inset lightgray;" name="fullname"
                                       class="form-control" id="name" placeholder="Please Your FullName"/>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" style="border: 2px inset lightgray;"
                                       name="email" id="email" placeholder="Please Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" style="border: 2px inset lightgray;" class="form-control"
                                       name="subject" id="subject" placeholder="Please Your Subject"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" style="resize: none;border: 2px inset lightgray;"
                                          name="message" rows="5" placeholder="Please Your Message"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success btn-block" id="submit"/>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- =======  End Contact Area =======
    <script>
        let submit = document.getElementById("submit");
        submit.addEventListener("click", function () {
            alert("Thanks *-*");
        });
    </script>
-->

@section('js')
    <script src="{{ asset("toast/dist/jquery.toast.min.js") }}"></script> <!--  plugin alert message toast jquery  -->

    <script>
        $('#form').submit(function (event) {        // submit  OR  click
            event.preventDefault();                // not allow refresh   OR   go to page next
            let fullname = $('input[name=fullname]').val();  // val() = value(text)
            let email = $('input[name=email]').val();
            let subject = $('input[name=subject]').val();
            let message = $('textarea[name=message]').val();
            let token = $('input[name=_token]').val();
            let action = $('#form').attr('action');

            $.ajax({
                url: action,
                type: "Post",
                data: {
                    fullname: fullname,  // 1) input[name=fullname]       2) LET FULLNAME
                    email: email,
                    subject: subject,
                    message: message,
                    _token: token,
                },
                success: function (data) {
                    if (data == 1) {
                        $.toast({               // plugin toast jquery alert message
                            heading: 'Success',
                            text: 'your message has send. Thanks !',
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: "top-right",
                        })
                    } else {
                        $('input[name=fullname]').val('');   // empty
                        $('input[name=email]').val('');
                        $('input[name=subject]').val('');
                        $('input[name=message]').val('');
                    }
                }

            });
        })
    </script>
@endsection


