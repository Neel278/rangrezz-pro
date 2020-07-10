@extends('layouts.master')

@section('title')
Rangrezz | Home
@endsection

@section('content')
<div class="hero">
    <h1 id="title-1">Online Art Auction<em><span>R</span>ANGREZZ</em>Make the world beautiful with us.</h1>
    <div class="social-btn-container">
        <span class="social-btn-box">
            <a href="#" class="google-plus-btn">
                <i class="fa fa-google-plus"></i>
            </a>
        </span>
        <!-- /.social-btn-box -->
        <span class="social-btn-box">
            <a href="#" class="facebook-btn">
                <i class="fa fa-facebook"></i>
            </a>
        </span>
        <!-- /.social-btn-box -->
        <span class="social-btn-box">
            <a href="#" class="twitter-btn">
                <i class="fa fa-twitter"></i>
            </a>
        </span>
        <!-- /.social-btn-box -->
        <span class="social-btn-box">
            <a href="#" class="linkedin-btn">
                <i class="fa fa-linkedin"></i>
            </a>
        </span>
        <!-- /.social-btn-box -->
        <span class="social-btn-box">
            <a href="#" class="youtube-btn">
                <i class="fa fa-youtube"></i>
            </a>
        </span>
        <!-- /.social-btn-box -->
    </div>
    <!-- /.social-btn-container -->

    <div class="fixbottarro"> <a class="scroll" href="#section-2">Scroll for more</a> </div>
</div>
<!-- /.hero -->
</div>
<!-- END #section-1 -->

<div id="section-2">
    <div class="grid">
        <div class="col_12">
            <h2 class="title-2">Rangrezz....<br>

                <span class="wow fadeInUp" data-wow-duration="2s">We Are Creative Nerds; we try harder</span></h2>
        </div>
        <!-- END col_12 -->
    </div>
    <!-- END .GRID -->

    <div class="grid flex">
        <div class="rows">
            <div class="colw_6 wow zoomIn">
                <div class="wrapimg hack960">
                    <div class="pic">
                        <img src="{{asset('images/web-dizajn-1.png')}}" class="pic-image full-width" alt="Pic" />
                        <div class="pic-caption top-to-bottom">
                            <h1 style="color:white; font-size: 2em; text-decoration: underline;">Saraswati</h1>
                            <p style="color:white;">The goddesses Saraswati, painted in 1896, are iconic in their
                                visualization. The religious texts and the oral tradition that formed the basis for
                                these paintings do not belong to any particular region of India as the entire country
                                has always absorbed these goddesses into their midst. Despite such identification, Ravi
                                Varma could not have realized the extent to which his two images, given a new meaning
                                through the medium of oil paint [and later through his lithographic press], were to
                                endear themselves to the people of India. Similar to other artists and writers, Ravi
                                Varma presented his goddesses in his own manner and with a specific intention in mind.
                            </p>
                            <button type="button" class="btn btn-light">Buy Now</button>
                        </div>
                    </div>
                </div>
                <!-- END wrapimg -->
            </div>
            <!-- END col_6 -->

            <div class="colw_6 ">
                <div class="box66">
                    <div class="wrap icon"> <i class="fa fa-cog fa-spin"></i> <i class="fa fa-spin-reverse fa-cog"></i>
                        <i class="fa fa-cog fa-spin"></i> </div>
                    <h3 class="center wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        About : The Story
                    </h3>
                    <p>
                        "Rangrezz": the word which we have taken is basically a Persian word which means dyer, the
                        person
                        who dyes called "Rangrez",for unique identity we have used " Rangrezz"
                    </p>
                    <p>
                        Rangrezz also provides the beginners to showcase their artwork at Rangrezz virtual Gallery
                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-info">
                            Visit Gallery
                        </button>
                    </div>
                </div>
                <!-- END box66 -->
            </div>
            <!-- END col_6 -->

        </div>
        <!-- END row -->

    </div>
    <!-- End GRID FLEX -->

</div>
<!-- END #section-2 -->

<!-- partial:index.partial.html -->

<div class="container wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
    <header class="main-header clearfixs">
        <h1 class="name">Current Auctions</h1>
    </header>
    <div class="content clearfixs">
        {{-- ==================================== --}}
        <?php
        /**
        * TODO: Fetching this details from database dynamically
        */
    $paintings_details = [
        [
            'name' => 'Menaka',
            'description' => 'Tallenge Menaka and Shakuntala - by Raja Ravi Varma - Large Canvas - Unframed (20 x 30 inches)',
            'painting_path' => 'images/menaka.JPG',
            'painting_id' => 'exampleModal'
        ],
        [
            'name' => 'Jatayu Vadh',
            'description' => 'DollsofIndia Jatayu Vadh - Raja Ravi Varma Painting on Canvas - 33 x 19 inches (KQ91)',
            'painting_path' => 'images/jatayu.jpg',
            'painting_id' => 'exampleModal1'
        ],
        [
            'name' => 'Kadambari',
            'description' => '64 Arts Kadambari(Unframed Canvas Prints) -Raja Ravi Varma Paintings - 24" X 16"',
            'painting_path' => 'images/kadambari.jpg',
            'painting_id' => 'exampleModal2'
        ],
        [
            'name' => 'Radha',
            'description' => 'Tallenge Radha Krishna (Manini Radha) Raja Ravi Varma Mythology Collection Framed Poster (12 x 18 Inches)',
            'painting_path' => 'images/radha.jpg',
            'painting_id' => 'exampleModal3'
        ],
        [
            'name' => 'Lakshmi',
            'description' => 'Lakshmi by Raja Ravi Varma Small Size Premium Quality Unframed Wall Art Print On Canvas (9 inches x 12 inches)',
            'painting_path' => 'images/Raja_Ravi_Varma,_Goddess_Lakshmi,_1896.jpg',
            'painting_id' => 'exampleModal4'
        ],
    ]
?>
        @foreach ($paintings_details as $painting_details)

        <x-modal :paintingDetails="$painting_details" />

        @endforeach
        {{-- ===================================== --}}
    </div>
    <!--content clear fix -->
</div>
<!-- partial -->
<div id="section-5">
    <div class="grid flex16">
        <div class="rows">
            <div class="colw_6">
                <div class="box66">
                    <div class="icon wow fadeInRightBig"><a class="animsition-link" href="company.html"> <i
                                class="fa fa-camera fa-4x"></i></a></div>
                    <h4 class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s"
                        style="text-align: center;">Rangrezz Virtual Painting Gallery</h4>
                    <p>There is no doubt that art is a great way of inspiration. Art provides a new direction of views
                        about different problems to the people who have an interest in art. Rangrezz having Virtual
                        painting Gallery ,Have a look once! </p>
                    <a class="animsition-link vale" href="{{route('gallery')}}">Visit Virtual Gallery</a>
                </div>
                <!-- END box66 -->
            </div>
            <!-- END col_6 -->

            <div class="colw_6 hack960 paddbott100 wow zoomIn">
                <div class="wrapimg">
                    <div class="pic"> <img src="{{asset('images/web-dizajn-3.jpg')}}" class="pic-image full-width"
                            alt="Pic" />
                        <div class="pic-caption top-to-bottom"> <a class="animsition-link" href="{{route('gallery')}}">
                                <button id="button" class="BT-OH-BR-R6-NF-FH-FP-TU-PT">
                                    <canvas id="canvas"></canvas>
                                    <hover></hover>
                                    <span>Virtual Gallery</span>
                                </button>
                            </a> </div>
                    </div>
                </div>
                <!-- END wrapimg -->
            </div>
            <!-- END col_6 -->

        </div>
        <!-- END row -->

    </div>
    <!-- END .GRID FLEX16 -->

</div>
<!-- END #section-5 -->

</div>
<!-- END .animsition-overla -->
@endsection