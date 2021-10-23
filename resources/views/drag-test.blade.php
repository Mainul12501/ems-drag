<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drag Test</title>
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>--}}
</head>
<body>

<style>
    ul li {
        width: 50px;
        border: 2px solid red;
        margin-left: 5px;
        text-align: center;
    }
    .one{
        cursor: pointer;
    }
</style>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Drag test</h2>
                    <div class="form-start">
                        <form action="{{ url('/drag-data') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="">this is question. have to ans this.</label>
                                <input type="hidden" name="question_id" value="10">


                                <div class="card card-body">
                                    <div id="draggable" class="" >
                                        <ul class="nav ui-widget-content" >
                                                                                    <li id="one">one</li>
                                                                                    <li id="two">two</li>
                                                                                    <li id="three">three</li>
                                                                                    <li id="four">four</li>
                                                                                    <li id="five">five</li>
                                                                                    <li id="six">six</li>
                                            <li class="one">one</li>
                                            <li class="one">two</li>
                                            <li class="one">three</li>
                                            <li class="one">four</li>
                                            <li class="one">five</li>
                                            <li class="one">six</li>
                                        </ul>
                                    </div>
                                    <label for="">category Name</label> <br>
                                    <div id="droppable" class="ui-widget-header">
                                        <input type="text" style="height: 200px; background-color: lightgrey" name="ans_field" >
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">category Name</label> <br>
{{--                                            <div id="dropable" class="ui-widget-header">--}}
{{--                                                <input type="text" style="height: 200px; background-color: lightgrey" name="ans_field" >--}}
{{--                                            </div>--}}

                                        </div>
                                    </div>
                                </div>

{{--                                <div class="card card-body">--}}
{{--                                    --}}
{{--                                </div>--}}
                            </div>
                            <input type="submit" value="save">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
    $(function (){
        $('#draggable ul li').draggable();
        $( "#droppable" ).droppable({
            drop: function( event, ui ) {

            }
        });

    })
</script>
</body>
</html>








