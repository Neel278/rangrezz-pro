<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Gallery</title>
    <meta name="description" content="Add a description" />
    <meta name="keywords" content="Add keywords" />
    <meta name="author" content="Codrops" />

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('gallery/css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('gallery/css/component2.css')}}" />
    <script src="{{asset('gallery/js/modernizr.custom.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('gallery/lightbox2-2.11.1/dist/css/lightbox.min.css')}}">
    <script src="{{asset('gallery/lightbox2-2.11.1/dist/js/lightbox-plus-jquery.min.js')}}"></script>
    <style type="text/css" media="screen">
        .btn {
            border: none;
            background-color: #661414;
            color: white;
            border-radius: 10px;
            padding: 10px;

        }
    </style>

<body>
    <script>
        lightbox.option({
    	'resizeDuration':700,
      'showImageNumberLabel':false
      
    })
    </script>
    <div class="containers">
        <!-- Codrops top bar -->
        <div class="codrops-top clearfix">
            <a href="{{route('index')}}"><strong style="color:white;">Back To Home</strong></a>
        </div>
        <!--/ Codrops top bar -->
        <h1>Rangrezz</h1>
        <div id="gr-gallery" class="gr-gallery">
            <div class="gr-main">
                {{-- ======================================== --}}
                <?php
                // TODO : fetch this details from todays top 10 painting table
            
            $paintings_details_for_image_gallery = [
                [
                    'painting_path' => 'gallery/images/images(1).jpg',
                    'title' => 'Radha, 1900',
                    'genre' => 'Mythological painting',
                    'technique' => 'Acrylic',
                    'material' => 'canvas',
                    'dimensions'=>'96.52 x 66.68 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(10).jpg',
                    'title' => 'Maharani Chimanbai,1902',
                    'genre' => 'family portrait painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'91 x 152 cm',
                    'gallery' => 'Maharaja Fateh Singh Museum, Lakshmi Vilas Palace, Vadodara (Baroda), Gujarat.',
                ],
                [
                    'painting_path' => 'gallery/images/images(12).jpg',
                    'title' => 'Radha Vilas, 1898',
                    'genre' => 'Mythological painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'61 x 91.4 cm',
                    'gallery' => 'Private Collection',
                ],
                [
                    'painting_path' => 'gallery/images/images(13).jpg',
                    'title' => 'Shakuntala , 1873',
                    'genre' => 'Mythological painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'68.5 x 106.7 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(14).jpg',
                    'title' => 'Shakuntala with friends, 1895',
                    'genre' => 'Mythological painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'96.52 x 66.68 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(15).jpg',
                    'title' => 'The Beautiful Lady Without Pity, 1893',
                    'genre' => 'literary painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'81 x 112 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(16).jpg',
                    'title' => 'Lord Dattatreya, 1893',
                    'genre' => 'religious painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'127 x 66 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(17).jpg',
                    'title' => 'Saraswati, 1882',
                    'genre' => 'religious painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'116.52 x 79.06 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(18).jpg',
                    'title' => 'Menaka & Shakunatala, 1888',
                    'genre' => 'Mythological painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'96.52 x 66.68 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
                [
                    'painting_path' => 'gallery/images/images(19).jpg',
                    'title' => 'Shakunatala, 1899',
                    'genre' => 'Mythological painting',
                    'technique' => 'oil',
                    'material' => 'canvas',
                    'dimensions'=>'188 x 95.9 cm',
                    'gallery' => 'Ravi Varma Printing Press, Mumbai',
                ],
            ];
            
            ?>
                @foreach ($paintings_details_for_image_gallery as $painting_details_for_image_gallery)
                <x-painting-frame :paintingDetails="$painting_details_for_image_gallery" />
                @endforeach
                {{-- ===================================================== --}}
            </div>
        </div>
    </div><!-- /container -->


    <script src="{{asset('gallery/js/wallgallery.js')}}"></script>
    <script>
        $(function() {

				Gallery.init( {
					layout : [3,2,3,2]
				} );

			});
    </script>
</body>

</html>