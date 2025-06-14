<header class="header_wrap dark_skin">
    <div class="top-header light_skin bg_blue_dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <ul class="contact_detail list_none text-center text-md-left">
                        <li><i class="ti-mobile"></i>{{setting('phone')}}</li>
                        <li><i class="ti-email"></i>{{setting('email')}}</li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">
                        <ul class="list_none social_icons radius_social social_white social_style1"
                            style="margin-right: 10px;">
                            <li><a href="{{setting('facebook')}}"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="{{setting('linkedin')}}"><i class="ion-social-linkedin"></i></a></li>
                        <!-- <li><a href="{{setting('youtube')}}"><i class="ion-social-youtube-outline"></i></a></li>
		                         <li><a href="{{setting('instagram')}}"><i class="ion-social-instagram-outline"></i></a></li> -->
                        </ul>

                        <a href="#" class="btn btn-default animation " data-toggle="modal" data-target="#Login"
                           style="color: #9E9FA3; font-size:12px;">Apply for Course</a>
                        <a href="#" class="btn btn-default animation hire_button" data-toggle="modal"
                           data-target="#Login1" style="color: #9E9FA3;  font-size:12px;">Hire Graduates</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 newmodal-content ">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                    <!-- <div class="col-lg-5">
                        <div class="h-100 background_bg radius_ltlb_5" data-img-src="assets/images/ss"></div>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="padding_eight_all new_padding">
                            <div class="heading_s1 mb-3 apply_header news1 nav-link">
                                <h4>Apply for a course</h4>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel">

                                    <form action="{{route('contact.apply')}}" method="post" class="login ">
                                        @csrf
                                        <div class="form-group ">

                                            <input type="text" required="" class="form-control" name="name"
                                                   placeholder="Full Name">
                                        </div>


                                        <div class="form-group ">
                                            <input class="form-control" required="" name="address"
                                                   placeholder=" Address">
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" required="" class="form-control" name="email"
                                                   placeholder="Email">
                                        </div>
                                        <div class="form-group ">
                                            <input type="text" required="" class="form-control" name="phone"
                                                   placeholder="Phone No.">
                                        </div>


                                        <div class="form-group">
                                            <select class="form-control" required="" name="course"
                                                    placeholder="Select course"><!-- id="select" -->
                                                <!-- <div class="option"> -->
                                                <option selected="selected">Select course...</option>
                                                @foreach(applyform() as $data)
                                                    @if(!empty($data->course))
                                                        <option>{{$data->course}}</option>
                                                @endif

                                            @endforeach


                                            <!-- </div> -->


                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required="" name="location"
                                                    placeholder="Select location"><!-- id="select" -->
                                                <!-- <div class="option"> -->
                                                <option selected>Select location...</option>
                                                 @foreach(applyform() as $data)
                                                    @if(!empty($data->location))
                                                        <option>{{$data->location}}</option>
                                                @endif

                                            @endforeach

                                            <!-- </div> -->


                                            </select>

                                        </div>

                                        <div class="form-group ">
                                            <button type="submit" class="btn btn-default btn-block" id="submitButton" name="submit">
                                                Apply
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade lr_popup" id="Login1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 newmodal-content ">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">

                    <div class="col-lg-12">
                        <div class="padding_eight_all new_padding">
                            <div class="heading_s1 mb-3 apply_header news1 nav-link">
                                <h4>Hire Graduates</h4>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="login" role="tabpanel">

                                    <form action="{{route('contact.hire')}}" method="post" class="login ">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="firstName"
                                                   placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="lastName"
                                                   placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required="" name="businessName"
                                                   placeholder="Name of Business">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" required="" name="businessAddress"
                                                   placeholder="Business Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="email"
                                                   placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="phone"
                                                   placeholder="Phone No.">
                                        </div>
                                        <div class="form-group">
                                            <input type="number" required="" class="form-control" name="graduatesNumber"
                                                   placeholder="No of Graduates" min="1" max="100">
                                        </div>


                                        <div class="form-group col-12">
                                            Graduate:
                                            @php
                                                $count=0;
                                            @endphp
                                            @foreach(hireform() as $data)
                                                @if(!empty($data->graduate))
                                                    <input type="checkbox" name="graduate"
                                                           @if($count==1) style="margin-left: 73px;" @endif >


                                                    <label for="vehicle1"
                                                           style="color: #666666;"> {{$data-> graduate}}</label><br>

                                                @endif
                                                @php
                                                    $count++;
                                                @endphp
                                            @endforeach


                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-block" name="submit">
                                                Hire
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#select').chosen();

        });

    </script>
@endpush
