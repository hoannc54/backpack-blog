@extends('frontend.layouts.default')
@section('right-content')
    <div class="col-md-12 page-body">
        <div class="row">


            <div class="sub-title">
                <h2>My Blog</h2>
                <a href="contact.html"><i class="icon-envelope"></i></a>
            </div>


            <div class="col-md-12 content-page">


                <!-- Blog Post Start -->
                @foreach($articles as $article)
                    <div class="col-md-12 blog-post">
                        <div class="post-title">
                            <a href="{{ route('frontend.article.index', [
                                            'id' => $article->id,
                                            'slug' => $article->slug
                                        ]) }}">
                                <h1>
                                    {{ $article->title }}
                                </h1>
                            </a>
                        </div>
                        <div class="post-info">
                            <span>November 23, 2016 / by <a href="#" target="_blank">Alex Parker</a></span>
                        </div>
                        <p>
                            {!! substr($article->content, 0, 1000) !!}
                        </p>
                        <a href="single.html" class="button button-style button-anim fa fa-long-arrow-right"><span>Read More</span></a>
                    </div>
            @endforeach

            <!-- Blog Post End -->

                <div class="col-md-12 text-center">
                    <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                    <div id="post-end-message"></div>
                </div>

            </div>

        </div>



        <!-- Subscribe Form Start -->
        <div class="col-md-8 col-md-offset-2">
            <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">

                <div class="subscribe-form margin-top-20">
                    <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
                <p>Subscribe to my weekly newsletter</p>
                <label for="mc-email" class="mc-label"></label>
            </form>

        </div>
        <!-- Subscribe Form End -->

    </div>
    @endsection