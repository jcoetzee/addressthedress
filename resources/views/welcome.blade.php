<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Address #TheDress</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
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
</head>
<body>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

@include('flash::message')

<div class="container">

    <div class="page-header" id="banner">
        <div class="row">
            <h1>Address #TheDress</h1>

            <p class="lead">Some are <a href="https://twitter.com/hashtag/TeamBlackAndBlue" target="_blank">#TeamBlackAndBlue</a>
                others are <a href="https://twitter.com/hashtag/TeamBlackAndBlue" target="_blank">#TeamWhiteAndGold</a>.
            </p>

            <p class="lead"><strong>I want to find out why!</strong></p>
        </div>

        <div class="share">
            <div class="fb-share-button" data-href="{{url()}}" data-layout="button_count"></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="JonoCoetzee">Tweet</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>
        </div>
    </div>

    <!-- Navbar
    ================================================== -->
    <div class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2 id="navbar">About</h2>
                </div>

                <div class="bs-component">
                    <div class="col-lg-11">
                        <p>You may or may not have been completely bombarded with a picture of a certain dress that has
                            been making the rounds on Twitter and the Internet in general. If you don't know what I'm
                            talking about the please read on especially, I need your unbiased virgin eyes!</p>

                        <p>My name is Jonathan Coetzee, an aspiring Data Scientist, and more than anything right now I
                            want to know why two people can be looking at the same picture and see completely different
                            things! Now I am no neuroscientist, the cause of the phenomenon may be dependent on the
                            wiring of our individual brains. That being said I really love to gather a whole bunch of
                            data to see if maybe a certain lighting environment or other factor presupposes us one way
                            or the other.</p>

                        <p><strong>To data scientists:</strong></p>

                        <p>I am not a data scientist, although it is a field I'm trying hard to get into. I have a very
                            small set of skills available to me at the moment. All the data collected in this survey
                            will be hosted publicly on the
                            <a href="https://github.com/jcoetzee/addressthedress" target="_blank">Github</a> project,
                            please grab it, take a look and let me know what you find! I see this as a learning
                            experience.
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
                    <h2 id="forms">Survey</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10">
                <div class="well bs-component">
                    {!! Form::open(['class' => "form-horizontal"]) !!}
                    <fieldset>
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
                                    <option value="blue_black">Blue and Black/Brown</option>
                                    <option value="white_gold">White and Gold</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group required">
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
            <div class="col-lg-6">
                <p>© <a href="http://www.twitter.com/jonocoetzee" rel="nofollow">Jonathan Coetzee</a></p>
            </div>
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li class="pull-right"><p>Template by <a href="http://thomaspark.me" rel="nofollow">Thomas Park</a></p></li>
                </ul>
            </div>
        </div>
    </footer>
</div>


<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="{{asset('js/all.js')}}"></script>


<script>
    $(document).ready(function () {
        $('#banner').height($(window).height());

        var theDress = $('#thedress');
        theDress.magnificPopup({
            type: 'image',
            background: "#fff"
        });

        theDress.click(function () {
            $('#colour_seen').prop('disabled', false);
            $('#submit').prop('disabled', false);
        });

        $("input[name$='seen_before']").click(function () {
            if ($(this).val() == 1) {
                $('.seen-before-questions').show()
            } else {
                $('.seen-before-questions').hide()
            }
        });

        $('select').prop("selectedIndex", -1)

        $('#flash-overlay-modal').modal();
    });
</script>

</body>
</html>