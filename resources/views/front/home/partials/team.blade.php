<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{ $settings['team']['title'] }}</h2>
            <p>{{ $settings['team']['text'] }}</p>
        </div>

        <div class="row">
            @foreach ($settings['team']['members'] as $member)
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration }}00">
                    <div class="member d-flex align-items-start">
                        <div class="pic"><img src="{{ asset($member['image']) }}" class="img-fluid"
                                alt="{{ $member['name'] }}">
                        </div>
                        <div class="member-info">
                            <h4>{{ $member['name'] }}</h4>
                            <span>{{ $member['title'] }}</span>
                            <p>{{ $member['text'] }}</p>
                            <div class="social">
                                <a href="{{ $member['twitter'] }}"><i class="ri-twitter-fill"></i></a>
                                <a href="{{ $member['facebook'] }}"><i class="ri-facebook-fill"></i></a>
                                <a href="{{ $member['instagram'] }}"><i class="ri-instagram-fill"></i></a>
                                <a href="{{ $member['linkedin'] }}"> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="member d-flex align-items-start">
                    <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
</section>
