@extends($user['vendor'] == 1 ? getTemplate() . '.user.layout.videolayout' : getTemplate() . '.user.layout_user.videolayout')
@section('tab1','active')
@section('tab') 
    <div class="h-20"></div>
    <div class="off-filters-li">
    <!-- <div class="result-info"> -->
            <div class="result-info-item">
           
                <span class="course" style="font-size:20px">1 - When team members located in different areas , it is called______</span>
                <br><br>
                <span class="badge badge-success" style="font-size:15px">a.Co-located Team</span>&nbsp&nbsp<span style='font-size:15px;' &#9989;> &#9989;</span>
                <br><br>
                <span class="course" style="font-size:15px">b.Virtual Team</span>
                <br><br>
                <span class="badge badge-success" style="font-size:15px">c.Alternative Team</span>&nbsp&nbsp<span style='font-size:15px;' &#9989;> &#9989;</span>
                <br><br>
                <span class="badge badge-success" style="font-size:15px">d.Project team</span>&nbsp&nbsp<span style='font-size:15px;' &#9989;> &#9989;</span>
                <!-- </div> -->
                <!-- <span class="course">d.RASI chart</span> -->
                <br><br><br>
               
                    <button class="btn btn-primary"  onclick="myFunction()">Explanation</button>
                    <br><br><br>

                    <div id="myDIV">
                    <span style="font-size:15px; background-color:yellow;">When project team members stay in different areas they are called virtual team. They are part of project team..</span>
                   <br><br> <span style="font-size:15px;">Explanation Video</span>
                   <br><br> <span style="font-size:15px;"><a href="{{ url('https://youtu.be/MbksBczShcA') }}">Visit The Link</a></span>
                   <video width="720" hight="480" class="video-js" data-setup='{}' muted controls>
                    <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                    <!-- <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"> -->
                    </video>
                    <!-- <video href="www.youtube.com">PmWebClass</video> -->
                    </div>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myDIV");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                            }
                    </script>
              
             
                <br><br><br>
         
                </div>
          
            <div class="result-info-item">
                <span class="course" style="font-size:20px">2 - In a project execution the project manager can't find the resources. To get out from this problem he should look into</span>
                    <br><br>
                    <span class="course" style="font-size:15px">a.Project calendar</span>
                    <br><br>
                    <span class="course" style="font-size:15px">b.RACI chart</span>
                    <br><br>
                    <span class="badge badge-success" style="font-size:15px">c.Resource Calendar</span>&nbsp&nbsp<span style='font-size:15px;' &#9989;> &#9989;</span>
                    <br><br>
                    <span class="course" style="font-size:15px">d.Team Charter</span>
                    <!-- <span class="course">d.RASI chart</span> -->
                    <br><br><br>

                    <!-- <button class="btn btn-primary"  onclick="myFunction()" id="show">Explanation</button> -->
                    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                    <button class="btn btn-primary">Explanation</button>
                    <br><br>
                        <p style="display: none; font-size:15px; background-color:yellow;">C is the right answer</p>
                        <br><br> <span style="font-size:15px;">Explanation Video</span>
                   <br><br> <span style="font-size:15px;"><a href="{{ url('https://youtu.be/MbksBczShcA') }}">Visit The Link</a></span>
                        
                        <script>
                        $( "button" ).click(function() {
                        $( "p" ).show( "slow" );
                        });
                        </script>

                    

                        <br><br><br>
            </div>
            <div class="result-info-item">
                <span class="course" style="font-size:20px">3.Which use the information radiator like kanban or task board?</span>
                    <br><br>
                    <span class="course" style="font-size:15px">a.Story point</span>
                    <br><br>
                    <span class="badge badge-success" style="font-size:15px">b.User story</span>&nbsp&nbsp<span style='font-size:15px;' &#9989;> &#9989;</span>
                    <br><br>
                    <span class="course" style="font-size:15px">c.Product Backlog</span>
                    <br><br>
                    <span class="course" style="font-size:15px">d.Retrospective </span>
                    <!-- <span class="course">d.RASI chart</span> -->
                    <br><br><br>

                    <!-- <button class="btn btn-primary"  onclick="myFunction()">Explanation</button> -->

                        <!-- <div id="myDIV">
                            This is my DIV element.
                        </div>
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myDIV");
                                if (x.style.display === "none") {
                                    x.style.display = "block";
                                } else {
                                    x.style.display = "none";
                                }
                                }
                        </script> -->

                        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                    <button class="btn btn-primary">Explanation</button>
                    <br><br>
                        <h4 style="display: none"></h4>
                        
                        <script>
                        $( "button" ).click(function() {
                        $( "h4" ).show( "slow" );
                        });
                        </script>


                        <br><br><br>
            </div>


    <!-- </div> -->
    </div>
@endsection