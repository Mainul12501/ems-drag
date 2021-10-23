<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>PM ShuHaRi</title>
    <link rel="icon" href="/assets/admin/img/48X48 (1).png"/>
</head>
<style>

ul{
    /* columns: 3;
    font-size: 1.5em;
    margin: 1em 0;
    padding: 0; */

  }

ul li{
    list-style: none;
     margin: 0;
  }
ul ul li {
    margin: 0;
}
/* div{
    display: flex;
    justify-content: space-between;
} */
*{
    margin: 0;
    padding: 0;
}
.container{
    /* display: flex; */
    justify-content: center;
    padding: 31px;
    width: 110vh;
    margin: 0 auto;
    margin-top: 10px;
    border: 1px solid rgb(158, 152, 152);
}
.container h2{
    margin-bottom: 10px;
}
.container .left{
    border: 1px solid rgb(158, 152, 152);
    padding: 40px;
}
.container .right{
    padding: 40px;
    border: 1px solid rgb(158, 152, 152);

}
.container .content{
    display: flex;
    margin-left: 20px;
    /* border: 1px solid red; */
}

.right ul{
    display: flex;
    /* flex-direction: row; */

}
.container .mid{
    margin: 5px;
}
hr{
    margin-bottom: 2px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.buttons {
    margin: 10%;
    text-align: center;

}

.btn-hover {
    width: 150px;
    font-size: 16px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    margin-top: 167px;
    height: 50px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 30px;
    -moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:hover {
    background-position: 100% 0;
    -moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}
.btn-hover.color-5 {
    background-image: linear-gradient(to right, #01a487, #3cba92, #ddd730, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);

}
.login-s {
    width: 100%;
    height: auto;
}
body > div.login-s > div.container.text-center > div > div.box.forgetbox > h2 {
        font-size: 1.6em;
    }

body > div.login-s > div.container.text-center > div > div.box.forgetbox > h2 {
        font-size: 2.1em;
    }


@media only screen and (max-width: 767px) and (min-width: 451px){
    .container {
        padding: 3px;
        width: 64vh;
    }
.container .left {
        padding: 10px;
    }
.container .content {
    margin-left: 4px;
    }
ul li {

    font-size: 12px;
}
.container .right {
    padding: 10px;
}
span {
    font-size: 12px;
}

.btn-hover {
    width: 100px;
    font-size: 14px;
    height: 40px;
}


}

@media only screen and (max-width: 450px) and (min-width: 400px){
.container {
        padding: 3px;
        width: 50vh;
    }
.container .left {
        padding: 10px;
    }
.container .content {
    margin-left: 4px;
    }
ul li {

    font-size: 12px;
}
.container .right {
    padding: 10px;
}
span {
    font-size: 12px;
}

.btn-hover {
    width: 100px;
    font-size: 14px;
    height: 40px;
}

}

@media only screen and (max-width: 399px) and (min-width: 361px){
.container {
        padding: 3px;
        width: 56vh;
    }
.container .left {
        padding: 5px;
    }
.container .content {
    margin-left: 0px;
    }
ul li {

    font-size: 10px;
}
.container .right {
    padding: 5px;
}
span {
    font-size: 10px;
}

.btn-hover {
    width: 100px;
    font-size: 14px;
    height: 40px;
}

}


@media screen and (max-device-width: 360px) and (device-height: 640px) and (-webkit-device-pixel-ratio: 3){
.container {
        padding: 3px;
        width: 56vh;
    }
.container .left {
        padding: 5px;
    }
.container .content {
    margin-left: 0px;
    }
ul li {

    font-size: 10px;
}
.container .right {
    padding: 5px;
}
span {
    font-size: 10px;
}

.btn-hover {
    width: 100px;
    font-size: 14px;
    height: 40px;
}


}

@media only screen and (max-width: 359px) and (min-width: 320px){
.container {
        padding: 3px;
        width: 56vh;
    }
.container .left {
        padding: 5px;
    }
.container .content {
    margin-left: 0px;
    }
ul li {

    font-size: 10px;
}
.container .right {
    padding: 5px;
}
span {
    font-size: 10px;
}

.btn-hover {
    width: 100px;
    font-size: 14px;
    height: 40px;
}


}

</style>
<body>
<div class="login-s">
<!-- <a href="{{ URL::previous() }}">Go Back</a> -->
<div class="h-25"></div>
        <div class="h-25"></div>
<input type="button" value="Go back!" onclick="history.back()">
<!-- <a href="/user/simulator/answer" class="btn btn-custom btn-primary">Review</a> -->

    <div class="container">

        <h2 style="color:#01a3a4;">Exam Simulator</h2>
        <!-- <form action="/user/quizzes/14/start" onSubmit="document.getElementById('submit').disabled=true;"> -->
{{--        <form action="/user/quizzes/15/start">--}}

{{--        <form method="get" class="form-horizontal" action="/user/quizzes/15/start">--}}
{{--            <form method="post" class="form-horizontal" action="/user/simulator/list">--}}
                <form method="get" class="form-horizontal" id="simulatorForm" action="{{route('sim-que')}}">
        <div class='content'>

                <div class="left">
                        <ul class="main">
                                <label for=""><strong>Domain</strong></label><br>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox"name="people" value="people" > People</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="process" name="process"> Process</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="enviornment" name="enviornment"> Environment</li><br><br>

                                <label for=""><strong>Methodology</strong></label><br>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="predictive" name="predictive" > Predictive</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="agile" name="agile"> Agile/Hybrid</li><br><br>


                                <label for=""><strong>Eco Lesson</strong></label><br>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="creating a high performance team" name="high_team" value="creating a high performance team" > Creating a high performance team</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="Stanting The Project" name="starting_project"> Starting the project</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="Doing The Work" name="doing_work"> Doing The Work</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="Keeping The Team On Track" name="keep_track"> Keeping The Team On Track</li>
                                <li>&nbsp&nbsp<input type="checkbox" class="checkbox" value="Keeping The Business In Mind" name="keep_mind"> Keeping The Business In Mind</li>
                                <!-- <li><input type="checkbox"class="checkbox" style="margin: 0; padding 0;"> Doing The Work</li>
                                <li><input type="checkbox"class="checkbox" style="margin: 0; padding 0;"> Keeping The Team On Track</li>
                                <li><input type="checkbox"class="checkbox" style="margin: 0; padding 0;"> Keeping The Business In Mind</li> -->
                                <br><br>
                            <hr>

                            <li><input id="select_all" class="selectAll" type="checkbox" ><strong>Select All</strong></li>
                        </ul>


                </div>
                <div class='mid'>

                </div>
                <div class="right">
                    <div class='right1'>
                    <label for=""><strong>Practice Exam</strong></label><br><br>
                        &nbsp&nbsp<input type="radio" class="practice" id="pra10" name="sim_qty" value="pra10"><span> 10 Questions</span> <br>
                        &nbsp&nbsp<input type="radio" class="practice" id="pra25" name="sim_qty" value="pra25"><span> 25 Questions</span> <br>
                        &nbsp&nbsp<input type="radio" class="practice" id="pra50" name="sim_qty" value="pra50"><span> 50 Questions</span><br>
                        &nbsp&nbsp<input type="radio" class="practice" id="pra100" name="sim_qty" value="pra100"><span> 100 Questions</span> <br><br>

                        <label for=""><strong>Simulated Exam</strong></label><br><br>
                        &nbsp&nbsp<input type="radio" name="sim_qty" class="simulated" value="sim50"><span> 50 Questions</span><br>
{{--                        <input type="hidden" name="sim_tiny_time" value="60">--}}
{{--                        <input type="hidden" name="sim_tiny_pass_mark" value="61">--}}
                        &nbsp&nbsp<input type="radio" name="sim_qty" class="simulated" value="sim100"><span> 100 Questions</span><br>
{{--                        <input type="hidden" name="sim_mid_time" value="120">--}}
{{--                        <input type="hidden" name="sim_mid_pass_mark" value="61">--}}
                        &nbsp&nbsp<input type="radio" name="sim_qty" class="simulated" value="sim200"><span> Full-length Exam </span><br><br>
{{--                        <input type="hidden" name="sim_big_time" value="240">--}}
{{--                        <input type="hidden" name="sim_big_pass_mark" value="61">--}}

                    <label for=""><strong>Question Sources</strong></label><br><br>
                        &nbsp&nbsp<input type="radio" name="items" value="value1" disabled><span>Exclude PMtabata Questions</span><br>
                        {{-- &nbsp&nbsp<input type="radio" name="items" value="value1">Exclude Solved Questions <br> --}}

                    </div>
                        <button class="btn-hover color-5" id="submitBtn" type="submit">Begin Exam</button>
                        <!-- <input type="submit" name="submit" value="Submit" id="submit"> -->
                </div>

        </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#select_all').on('click',function(){
            if(this.checked){
                $('.checkbox').each(function(){
                    this.checked = true;
                });
            }else{
                $('.checkbox').each(function(){
                    this.checked = false;
                });
            }
        });
        // ###########

        // ###########

        $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#select_all').prop('checked',true);
            }else{
                $('#select_all').prop('checked',false);
            }
        });
    });
</script>
<script>
    $(function (){
        $('.simulated').click(function (){
            $('.checkbox').prop('disabled', true);
            $('.selectAll').prop('disabled', true);
        });
        $('.practice').click(function (){
            $('.checkbox').attr('disabled', false);
            $('.selectAll').attr('disabled', false);
        });
    });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('#submitBtn').on('click',function (){
        event.preventDefault();
        var inputVal = $('input[name="sim_qty"]:checked').val();
        if (inputVal)
        {
            $('#simulatorForm').submit();
        } else {

            toastr.error('Please Select Practice Exam.');
        }
    })
</script>

    <script>
    // Disable checkbox
    // $("input[value='value12']").change(function() {
    // $("input[name='items']").prop('disabled', true);
    // });

    // Enable checkbox
    // $("input[value='value1']").change(function() {
    // $("input[name='items']").prop('disabled', false);
    // });

    // Trigger reset button click
    // $("#btnReset").on("click", function() {
    //     $("input[name='value1']").prop('checked', false);
    //     $("input[name='items']").prop('checked', false);
    //     $("input[name='items']").prop('disabled', false);
    // });
    </script>
    <script type="text/javascript">
        // $(document).ready(function(){
        //     $('#select_all').on('click',function(){
        //         if(this.checked){
        //             $('.checkbox').each(function(){
        //                 $('.checkbox').each(function(){
        //                     this.checked = true;
        //
        //                 })else{
        //                     $('.checkbox').each(function(){
        //                         this.checked = false;
        //                         this.checked = true;
        //                         super.container = false;
        //                         this.checked = checkbox();
        //                         .then((result) => {
        //                             this = result + 1;
        //                             var checkbox = result++;
        //                             var show the switch;
        //                             var pliter_alter_switch_alter;
        //                             switch ($result) {
        //                                 case value1:
        //                                     "ok";
        //                                     break;
        //                                     while (1) {
        //                                         if(i==2){
        //                                             print("Exam id assigned");
        //                                             elseif(i==0)
        //                                             print("Exam not found");
        //
        //                                         }
        //                                     }
        //                                     // wallet alter ascending decending
        //
        //                                 case value2:
        //                                     "ok";
        //                                     // break;
        //                                     case value3:
        //                                     "right";
        //                                     case value4:
        //                                     "wrong";
        //                                     case
        //
        //
        //
        //                                 default:
        //                                     break;
        //                             }
        //
        //                         }).catch((err) => {
        //
        //                         });
        //
        //
        //
        //                     });
        //                 }
        //                 else if(function){
        //                     $('.checkbox').each(function){
        //                         this.checked = true;
        //                         this.
        //
        //                     }
        //                 }
        //             }
        //         }
        //     });
        // });
    </script>



</body>
</html>
