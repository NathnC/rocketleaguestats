<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #1a1a1a;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .box {
                border-radius: 4px;
                box-shadow: 0 0 4px 0 rgba(159,173,196,.4);
                background-color: #2f2f2f;
            }

            .box img {
                max-width: 80px;
            }

            .box .col-md-6 {
                padding-top: 35px;
                padding-bottom: 35px;
            }

            .box .col-md-3 {
                padding-top: 35px;
                padding-bottom: 35px;
            }

            .box .col-md-2 {
                padding-top: 15px;
                padding-bottom: 15px;
            }

            .box .heading {
                padding-top: 15px;
                box-sizing: border-box;
                color: rgb(237, 231, 215);
                font-family: Roboto, sans-serif;
                font-size: 14px;
                font-weight: 400;
                line-height: 18px;
            }

            .box .subheading {
                padding-top: 5px;
                box-sizing: border-box;
                color: rgb(255, 205, 80);
                font-family: Roboto, sans-serif;
                font-size: 28px;
                font-weight: 400;
                line-height: 36px;
                list-style-image: none;
                list-style-position: outside;
                list-style-type: none;
                vertical-align: bottom;
            }

        </style>
    </head>
    <body>





        <div class="container" style="margin-top: 30px;">

            <div class="col-md-8 col-md-offset-2">
                <div class="box">
                    <div class="col-md-12 text-center">
                        <div class=" rank col-md-4 col-md-offset-4 text-center">
                            <img src="https://media.discordapp.net/attachments/464841196536201259/478327304658092034/fa0d310b9c505e07d873892b7d179420.png" style="max-width: 190px;">
                        </div>
                    </div>
                    <div class="col-md-12 text-center" style="margin-bottom: 5px; color: white;">
                        Cheesecake Clan
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2" >

                <div class="box">
                    <div class="row">
                        <div class="col-md-6" style="border-right: 1px solid #d8d6d0;">
                            <div class="col-md-12 text-center">
                                <img src="https://image.flaticon.com/icons/svg/1060/1060769.svg">
                            </div>
                            <div class="col-md-12 text-center heading">
                                WINS
                            </div>
                            <div class="col-md-12 text-center subheading">
                                {{ $players[0]->stats->wins + $players[1]->stats->wins + $players[2]->stats->wins }}
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div class="col-md-12 text-center">
                                <img src="https://image.flaticon.com/icons/svg/1060/1060774.svg">
                            </div>
                            <div class="col-md-12 text-center heading">
                                MVP'S
                            </div>
                            <div class="col-md-12 text-center subheading">
                                {{ $players[0]->stats->mvps + $players[1]->stats->mvps + $players[2]->stats->mvps }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-8 col-md-offset-2" style="margin-top: 40px;">

                <div class="box">
                    <div class="row">
                        <div class="col-md-3" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center">
                                <img src="https://image.flaticon.com/icons/svg/1060/1060775.svg">
                            </div>
                            <div class="col-md-12 text-center heading">
                                GOALS
                            </div>
                            <div class="col-md-12 text-center subheading">
                                {{ $players[0]->stats->goals + $players[1]->stats->goals + $players[2]->stats->goals }}
                            </div>
                        </div>
                        <div class="col-md-3" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center">
                                <img src="https://image.flaticon.com/icons/svg/1060/1060809.svg">
                            </div>
                            <div class="col-md-12 text-center heading">
                                SAVES
                            </div>
                            <div class="col-md-12 text-center subheading">
                                {{ $players[0]->stats->saves + $players[1]->stats->saves + $players[2]->stats->saves }}
                            </div>
                        </div>
                        <div class="col-md-3" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center">
                                <img src="https://image.flaticon.com/icons/svg/1060/1060781.svg">
                            </div>
                            <div class="col-md-12 text-center heading">
                                SHOTS
                            </div>
                            <div class="col-md-12 text-center subheading">
                                {{ $players[0]->stats->shots + $players[1]->stats->shots + $players[2]->stats->shots }}
                            </div>
                        </div>
                        <div class="col-md-3" >
                            <div class="col-md-12 text-center">
                                <img src="https://image.flaticon.com/icons/svg/1060/1060773.svg">
                            </div>
                            <div class="col-md-12 text-center heading">
                                ASSISTS
                            </div>
                            <div class="col-md-12 text-center subheading">
                                {{ $players[0]->stats->assists + $players[1]->stats->assists + $players[2]->stats->assists }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-md-10 col-md-offset-1" style="margin-top: 40px; margin-bottom: 80px;">

                <div class="box">
                    <div class="row">
                        <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center heading">
                                MEMBER
                            </div>
                        </div>
                        <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center heading">
                                RANK
                            </div>
                        </div>
                        <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center heading">
                                GOALS
                            </div>
                        </div>
                        <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center heading">
                                SHOTS
                            </div>
                        </div>
                        <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                            <div class="col-md-12 text-center heading">
                                ASSISTS
                            </div>
                        </div>
                        <div class="col-md-2" >
                            <div class="col-md-12 text-center heading">
                                MVP'S
                            </div>
                        </div>
                    </div>

                    @foreach($players as $p)
                        <div class="row">
                            <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                                <div class="col-md-12 text-center" >
                                    <img src="{{ $p->avatar }}" >
                                    <a href="{{ $p->profileUrl }}" style="color: white;">
                                        {{ $p->displayName }}
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                                <div class="col-md-12 text-center">
                                    <img src="{{ app('App\Http\Controllers\HomeController')->getRankImage($p) }}" style="max-width: 90px;">
                                </div>
                            </div>
                            <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                                <div class="col-md-12 text-center subheading" style="margin-top: 14.5px; margin-bottom: 14.5px">
                                    {{ $p->stats->goals }}
                                </div>
                            </div>
                            <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                                <div class="col-md-12 text-center subheading" style="margin-top: 14.5px; margin-bottom: 14.5px">
                                    {{ $p->stats->shots }}
                                </div>
                            </div>
                            <div class="col-md-2" style="border-right: 1px dashed #d8d6d0;">
                                <div class="col-md-12 text-center subheading" style="margin-top: 14.5px; margin-bottom: 14.5px">
                                    {{ $p->stats->assists }}
                                </div>
                            </div>
                            <div class="col-md-2" >
                                <div class="col-md-12 text-center subheading" style="margin-top: 14.5px; margin-bottom: 14.5px">
                                    {{ $p->stats->mvps }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>


    </body>
</html>
