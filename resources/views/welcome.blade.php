<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Address #TheDress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link href="{{ elixir("css/app.css") }}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">

    <style>
        .mfp-bg {
            background: {{$colour}};
        }
    </style>

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16"/>
    <meta name="application-name" content="#TheDress"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="mstile-144x144.png"/>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60214528-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script type="text/javascript">var switchTo5x = true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({
            publisher: "f8ef1e84-6868-4229-af87-d3f6226c3b2a",
            doNotHash: true,
            doNotCopy: true,
            hashAddressBar: true
        });</script>
</head>
<body>

@include('flash::message')

<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <h1>Address #TheDress</h1>

            <p class="lead">Some are <a href="https://twitter.com/hashtag/TeamBlackAndBlue" target="_blank">#TeamBlackAndBlue</a>
                others are <a href="https://twitter.com/hashtag/TeamBlackAndBlue" target="_blank">#TeamWhiteAndGold</a>.
            </p>

            <p class="lead"><strong>I want to find out why!</strong></p>

            <p>
                <span class='st_facebook_hcount' displayText='Facebook'></span>
                <span class='st_twitter_hcount' displayText='Tweet'></span>
                <span class='st_linkedin_hcount' displayText='LinkedIn'></span>
                <span class='st_pinterest_hcount' displayText='Pinterest'></span>
                <span class='st_email_hcount' displayText='Email'></span>
            </p>

            <p>
                <a href="https://twitter.com/JonoCoetzee" class="twitter-follow-button"
                   data-show-count="false">Follow @JonoCoetzee</a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + '://platform.twitter.com/widgets.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'twitter-wjs');</script>
            </p>
        </div>

    </div>

    <!-- Navbar
    ================================================== -->
    <div class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>About</h2>
                </div>

                <div class="bs-component">
                    <div class="col-lg-9">
                        <p>You may or may not have been completely bombarded with a picture of a certain dress that has
                            been making the rounds on Twitter and the Internet in general, if you have then please stay
                            with me for just a few minutes longer. If you have no idea what I’m talking about then this
                            actually a good thing since you wont have a bias or presupposition of what you should
                            see.</p>

                        <p>My name is Jonathan Coetzee. I am an aspiring Data Scientist and I’m very curious as to why
                            two people can see such different colours when looking at the same picture. This curiosity
                            is the reason why I made this site. Here I hope to obtain enough data from many different
                            people in the hopes of finding patterns that make people’s brains “fix” the colours one way
                            or the other. I am no neuroscientist however; the cause of the phenomenon may be entirely
                            dependent on the wiring of our individual brains. Even if we find no conclusive correlations
                            between the questions below and the colours perceived, we will still have learnt something,
                            as we will then know to look elsewhere.</p>

                        <p><strong>To data scientists:</strong></p>

                        <p>I am not a data scientist, although it is a field I'm trying hard to get into and in the
                            process of teaching myself. I have a small set of skills available to me at the moment. All
                            the data collected in this survey will be hosted publicly on the
                            <a href="https://github.com/jcoetzee/addressthedress" target="_blank">Github</a> project,
                            released under the Creative Commons licence. Please grab it, see what you can find, and
                            share
                            the results!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forms
    ================================================== -->
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2 id="survey">Survey</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="well bs-component">
                    {!! Form::open(['class' => "form-horizontal"]) !!}
                    <fieldset>
                        @if ($errors->any())
                            <ul class="alert alert-danger">

                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="form-group required">
                            <label class="col-lg-4 control-label">Gender</label>

                            <div class="col-lg-8">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="male">
                                        Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-lg-4 control-label">Age</label>

                            <div class="col-lg-8">
                                <input type="number" class="form-control" name="age" placeholder="Age">
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-lg-4 control-label">Left or Right Handed?</label>

                            <div class="col-lg-8">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="handedness" value="right">
                                        Right
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="handedness" value="left">
                                        Left
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Eye Colour</label>

                            <div class="col-lg-8">
                                <select class="form-control" name="eye_colour">
                                    <option selected disabled hidden value=''></option>
                                    <option value="brown">Brown</option>
                                    <option value="hazel">Hazel</option>
                                    <option value="blue">Blue</option>
                                    <option value="green">Green</option>
                                    <option value="grey">Grey</option>
                                    <option value="amber">Amber</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Dominant Light Source</label>

                            <div class="col-lg-8">
                                <select class="form-control" name="light_source">
                                    <option selected disabled hidden value=''></option>
                                    <option value="sunrise">Sunrise/Sunset</option>
                                    <option value="incandescent">Incandescent/Tungsten/Soft CCFL</option>
                                    <option value="florescent">Cool White CCFL/Florescent</option>
                                    <option value="daylight">Daylight</option>
                                    <option value="cloudy">Cloudy/Overcast</option>
                                    <option value="shade">Shade/Heavily Overcast</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label">Brightness Estimate</label>

                            <div class="col-lg-8">
                                <select class="form-control" name="brightness">
                                    <option selected disabled hidden value=''></option>
                                    <option value="2">Bright</option>
                                    <option value="1">Average</option>
                                    <option value="0">Dark</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-lg-4 control-label">Have you seen #TheDress before</label>

                            <div class="col-lg-8">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="seen_before" value="0">
                                        No
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="seen_before" value="1">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group seen-before-questions required" hidden>
                            <label class="col-lg-4 control-label">What colour was it the first time you
                                saw it?</label>

                            <div class="col-lg-8">
                                <select class="form-control" name="first_time_colour">
                                    <option selected disabled hidden value=''></option>
                                    <option value="blue_black">Blue and Black/Brown</option>
                                    <option value="white_gold">White and Gold</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group seen-before-questions required" hidden>
                            <label class="col-lg-4 control-label">Have the colours ever
                                changed?</label>

                            <div class="col-lg-8">
                                <select class="form-control" name="colours_changed">
                                    <option selected disabled hidden value=''></option>
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <a id="thedress" class="btn btn-info" href="{{asset('images/the_dress.jpg')}}">Show
                                    Picture</a>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="col-lg-4 control-label">What colour was the dress?</label>

                            <div class="col-lg-8">
                                <select class="form-control" id="colour_seen" name="colour_seen" disabled>
                                    <option selected disabled value=''>Please view the picture first</option>
                                    <option value="blue_black">Blue and Black/Brown</option>
                                    <option value="white_gold">White and Gold</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-4 control-label"></label>

                            <div class="col-lg-8 col-lg-offset-4">
                                {!! Recaptcha::render() !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <button type="submit" class="btn btn-success" id="submit" disabled>Submit</button>
                            </div>
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li><p><a href="http://addressthedress.com/">AdressTheDress.com</a> © <a
                                    href="http://www.twitter.com/jonocoetzee" rel="nofollow">Jonathan Coetzee</a></p>
                    </li>
                    <li><p>Template by <a href="http://thomaspark.me" rel="nofollow">Thomas Park</a>
                        </p></li>
                </ul>
            </div>
        </div>
    </footer>
</div>


<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="{{asset('js/all.js')}}"></script>


<script>
    $(document).ready(function () {
        $("#banner").height($(window).height());
        (function () {
            var a = $("#thedress");
            a.magnificPopup({type: "image", closeOnContentClick: !0});
            a.click(function () {
                var a = $("#colour_seen"), b = a.find("option:first");
                b.text("");
                b.prop("hidden", !0);
                a.prop("disabled", !1);
                $("#submit").prop("disabled", !1)
            })
        })();
        $("input[name$='seen_before']").click(function () {
            1 == $(this).val() ? $(".seen-before-questions").show() : $(".seen-before-questions").hide()
        });
        $("#flash-overlay-modal").modal()

        @if ($errors->any())
        $('html, body').animate({
            scrollTop: $("#survey").offset().top
        }, 1000);
        @endif

    });
</script>

</body>
</html>