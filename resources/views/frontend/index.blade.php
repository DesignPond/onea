@extends('frontend.layouts.master')
@section('content')

    <!-- Page Title -->
    <h1>We’re World-Class. Fact.</h1>
    <!-- END Title -->

    <!-- Intro -->
    <!-- Title -->
    <h3>
        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
        making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
    </h3>
    <!-- Text -->
    <p>
        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and
        1.10.33 from “de Finibus Bonorum et Malorum” by Cicero are also reproduced in their exact original form, accompanied
        by English versions from the 1914 translation by H. Rackham.
    </p>
    <!-- END Intro -->

    <!-- Content Spacer (20px gap) -->
    <div class="spacer"></div>
    <!-- END Content Spacer (20px gap) -->

    <!-- Three Columns + Big Icons -->
    <div class="column-container">

        <!-- One Third -->
        <div class="column-one-third center">
            <div class="icon-container big-icon">
                <!-- Icon Backing -->
                <div class="icon-backing" style="background-color: #63885F;">
                    <!-- Icon -->
                    <i class="fa fa-heart"></i>
                </div>
            </div>
            <!-- Title -->
            <h3>What is Lorem Ipsum?</h3>
            <!-- Text -->
            <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula.</p>
        </div>
        <!-- END One Third -->

        <!-- One Third -->
        <div class="column-one-third center">
            <div class="icon-container big-icon">
                <!-- Icon Backing -->
                <div class="icon-backing" style="background-color: #d28762;">
                    <!-- Icon -->
                    <i class="fa fa-flag"></i>
                </div>
            </div>
            <!-- Title -->
            <h3>What is Lorem Ipsum?</h3>
            <!-- Text -->
            <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula.</p>
        </div>
        <!-- END One Third -->

        <!-- One Third -->
        <div class="column-one-third center">
            <div class="icon-container big-icon">
                <!-- Icon Backing -->
                <div class="icon-backing" style="background-color: #6E6588;">
                    <!-- Icon -->
                    <i class="fa fa-table"></i>
                </div>
            </div>
            <!-- Title -->
            <h3>What is Lorem Ipsum?</h3>
            <!-- Text -->
            <p>Donec metus leo, elementum at ultrices ac, dapibus at justo. Donec tristique hendrerit dui vitae lacinia. Suspendisse ante ligula.</p>
        </div>
        <!-- END One Third -->

    </div>
    <!-- END Three Columns + Big Icons -->

    <!-- Divider -->
    <div class="divider"></div>
    <!-- END Divider -->

    <!-- The Team -->
    <ul class="team column-container">

        <!-- One Fourth -->
        <li class="column-one-fourth">
            <!-- Image -->
            <div class="image-wrapper">
                <img alt="" src="{{ asset('frontend/images/placeholders/placeholder-large.jpg') }}" class="fullwidth"/>
            </div>
            <!-- Title -->
            <h3>Chief Whitecloud</h3>
            <!-- Excerpt -->
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.</p>
            <!-- Social -->
            <ul class="social">
                <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                </li>
            </ul>
        </li>
        <!-- END One Fourth -->

        <!-- One Fourth -->
        <li class="column-one-fourth">
            <!-- Image -->
            <div class="image-wrapper">
                <img alt="" src="{{ asset('frontend/images/placeholders/placeholder-large.jpg') }}" class="fullwidth"/>
            </div>
            <!-- Title -->
            <h3>Paul Hembry</h3>
            <!-- Excerpt -->
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.</p>
            <!-- Social -->
            <ul class="social">
                <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                </li>
            </ul>
        </li>
        <!-- END One Fourth -->

        <!-- One Fourth -->
        <li class="column-one-fourth">
            <!-- Image -->
            <div class="image-wrapper">
                <img alt="" src="{{ asset('frontend/images/placeholders/placeholder-large.jpg') }}" class="fullwidth"/>
            </div>
            <!-- Title -->
            <h3>Lewis Hamilton</h3>
            <!-- Excerpt -->
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.</p>
            <!-- Social -->
            <ul class="social">
                <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                </li>
            </ul>
        </li>
        <!-- END One Fourth -->

        <!-- One Fourth -->
        <li class="column-one-fourth">
            <!-- Image -->
            <div class="image-wrapper">
                <img alt="" src="{{ asset('frontend/images/placeholders/placeholder-large.jpg') }}" class="fullwidth"/>
            </div>
            <!-- Title -->
            <h3>Martin Whitmarsh</h3>
            <!-- Excerpt -->
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.</p>
            <!-- Social -->
            <ul class="social">
                <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                </li>
            </ul>
        </li>
        <!-- END One Fourth -->

    </ul>
    <!-- END The Team -->

@stop