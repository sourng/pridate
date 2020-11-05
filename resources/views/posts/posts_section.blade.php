<div class="posts-section">
    @foreach($posts as $post)
    <div class="post-bar">
        <div class="post_topbar">
            <div class="usy-dt">
                <img class="cm_img" src="{{ $post->user->profile->profileImage() }}" alt="">
                <div class="usy-name">

                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark"><h3>{{ $post->user->name }}</h3></span>
                    </a>
                    <span><img src="{{asset('template/images/clock.png')}}" alt="">
                        <?php \Carbon\Carbon::setLocale('km') ?>
                        {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}
                    </span>
                </div>
            </div>
            <div class="ed-opts">
                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                <ul class="ed-options">
                    <li><a href="#" title="">Edit Post</a></li>
                    <li><a href="#" title="">Unsaved</a></li>
                    <li><a href="#" title="">Unbid</a></li>
                    <li><a href="#" title="">Close</a></li>
                    <li><a href="#" title="">Hide</a></li>
                </ul>
            </div>
        </div>
        <div class="epi-sec">
            <ul class="descp">
                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                <li><img src="images/icon9.png" alt=""><span>India</span></li>
            </ul>
            <ul class="bk-links">
                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
            </ul>
        </div>
        <div class="job_descp">
            <h3>{{$post->caption}}</h3>
            {{-- <ul class="job-dt">
                <li><a href="#" title="">Full Time</a></li>
                <li><span>$30 / hr</span></li>
            </ul> --}}
            <div class="col-6 ">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-400" style="padding-right: 10px; padding-bottom: 15px;">
                </a>
            </div>


            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption }}
                <a href="#" title="">view more</a>
            </p>
            <ul class="skill-tags">
                <li><a href="#" title="">HTML</a></li>
                <li><a href="#" title="">PHP</a></li>
                <li><a href="#" title="">CSS</a></li>
                <li><a href="#" title="">Javascript</a></li>
                <li><a href="#" title="">Wordpress</a></li>
            </ul>
        </div>
        <div class="job-status-bar">
            <ul class="like-com">
                <li>
                    <a href="#"><i class="fas fa-heart"></i> Like</a>
                    <img src="images/liked-img.png" alt="">
                    <span>25</span>
                </li>
                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
            </ul>
            <a href="#"><i class="fas fa-eye"></i>Views 50</a>
        </div>
    </div><!--post-bar end-->
    @endforeach


    <div class="top-profiles">
        <div class="pf-hd">
            <h3>Top Profiles</h3>
            <i class="la la-ellipsis-v"></i>
        </div>
        <div class="profiles-slider">
            <div class="user-profy">
                <img src="{{asset('template/images/resources/user1.png')}}" alt="">
                <h3>John Doe</h3>
                <span>Graphic Designer</span>
                <ul>
                    <li><a href="#" title="" class="followw">Follow</a></li>
                    <li><a href="#" title="" class="envlp"><img src="{{asset('template/images/envelop.png')}}" alt=""></a></li>
                    <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
            </div><!--user-profy end-->
            <div class="user-profy">
                <img src="{{asset('template/images/resources/user2.png')}}" alt="">
                <h3>John Doe</h3>
                <span>Graphic Designer</span>
                <ul>
                    <li><a href="#" title="" class="followw">Follow</a></li>
                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                    <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
            </div><!--user-profy end-->
            <div class="user-profy">
                <img src="{{asset('template/images/resources/user3.png')}}" alt="">
                <h3>John Doe</h3>
                <span>Graphic Designer</span>
                <ul>
                    <li><a href="#" title="" class="followw">Follow</a></li>
                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                    <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
            </div><!--user-profy end-->
            <div class="user-profy">
                <img src="{{asset('template/images/resources/user1.png')}}" alt="">
                <h3>John Doe</h3>
                <span>Graphic Designer</span>
                <ul>
                    <li><a href="#" title="" class="followw">Follow</a></li>
                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                    <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
            </div><!--user-profy end-->
            <div class="user-profy">
                <img src="{{asset('template/images/resources/user2.png')}}" alt="">
                <h3>John Doe</h3>
                <span>Graphic Designer</span>
                <ul>
                    <li><a href="#" title="" class="followw">Follow</a></li>
                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                    <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
            </div><!--user-profy end-->
            <div class="user-profy">
                <img src="{{asset('template/images/resources/user3.png')}}" alt="">
                <h3>John Doe</h3>
                <span>Graphic Designer</span>
                <ul>
                    <li><a href="#" title="" class="followw">Follow</a></li>
                    <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                    <li><a href="#" title="" class="hire">hire</a></li>
                </ul>
                <a href="#" title="">View Profile</a>
            </div><!--user-profy end-->
        </div><!--profiles-slider end-->
    </div><!--top-profiles end-->



    {{ $posts->links() }}
    <!--post-bar end-->




    <div class="process-comm">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div><!--process-comm end-->
</div><!--posts-section end-->
