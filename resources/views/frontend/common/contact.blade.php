
        <div class="row mt-5" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <div class="col-lg-6 col-md-12 mt-1">
                <div class="contact-form">
                    <form action="{{ route('send.email') }}" id="contact-frm" method="post">
                        @csrf
                        <input type="hidden" id="token" value="{{ @csrf_token() }}">
                        <div id="res"></div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" autocomplete=”off” required data-error="Please enter your name" placeholder="Name">
                                    <div>
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" autocomplete=”off” required data-error="Please enter your email" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" required data-error="Please enter your number" autocomplete=”off” class="form-control" placeholder="Phone">
                                    @error('phone')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" autocomplete=”off” required data-error="Please enter your subject" placeholder="Subject">
                                    @error('subject')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="content" id="content" class="form-control" id="content" autocomplete=”off” cols="30" rows="6" required placeholder="Your Message"></textarea>
                                    @error('content')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" id="btn" class="btn btn-primary">@if(session()->get('language') =='nepali')सन्देश पठाउनुहोस् @else Send Message @endif<i class="flaticon-right-chevron"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mt-1">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <span>@if(session()->get('language') =='nepali')ठेगाना @else Address @endif</span>
                            @if(session()->get('language') =='nepali')तुलसीपुर–६, दाङ @else Tulsipur-6, Dang Nepal @endif

                        </li>

                        <li>
                            <div class="icon">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <span>@if(session()->get('language') =='nepali')इमेल @else Email @endif</span>
                            <a href="#">radarbuilder@gmail.com</a>

                        </li>

                        <li>
                            <div class="icon">
                                <i class="bi bi-telephone-outbound-fill"></i>
                            </div>
                            <span>Phone</span>
                            <a href="#">@if(session()->get('language') =='nepali')९८५७८७७७७६ / ९८५७८४२२८८ @else 9857877776 / 9857842288 @endif</a>
                            <a href="#">@if(session()->get('language') =='nepali')९८१२८६६६७७ / ९८१२८६७१७८ @else 9812866677 / 9812867178 @endif</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Contact Area -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function() {
        $("#contact-frm").submit(function(e) {
            e.preventDefault();
            let url = $(this).attr('action');
            $("#btn").attr('disabled', true);
            $.post(url, {
                    '_token': $("#token").val(),
                    email: $("#email").val(),
                    name: $("#name").val(),
                    content: $("#content").val(),
                    subject: $("#subject").val(),
                    phone: $("#phone").val(),
                },

                function(response) {
                    if (response.code == 400) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.msg,
                        })
                    } else if (response.code == 200) {
                        const Toast = Swal.fire({
                            icon: 'success',
                            title: 'Successfully Send!',
                            text: response.msg,

                        })

                    }
                    $("#email").val(''),
                        $("#name").val(''),
                        $("#content").val(''),
                        $("#subject").val(''),
                        $("#phone").val('')
                });



        })

    })
</script>