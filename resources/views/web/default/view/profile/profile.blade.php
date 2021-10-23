@extends(getTemplate().'.view.layout.layout')
@section('title')
    {!! $setting['site']['site_title'].'Profile-'.$profile->name !!}
@endsection
@section('page')

    <div class="container-fluid profile-top-background" style="background: url('{{ !empty($meta['profile_image']) ? $meta['profile_image'] : get_option('default_user_cover','') }}');">
        <div class="col-md-3 col-xs-12">

        </div>
        <div class="col-md-9 col-xs-12 bottom-section">
            <span>
                <label class="profile-name">{{ $profile->name }}</label>  
            <!-- @if($follow == 0)
                    <a class="btn btn-red btn-hover-animate" href="/follow/{{ $profile->id }}"><span class="homeicon mdi mdi-plus"></span>&nbsp;&nbsp;{{ trans('main.follow') }}</a>
                @else
                    <a class="btn btn-red btn-hover-animate" href="/unfollow/{{ $profile->id }}"><span class="homeicon mdi mdi-close"></span>&nbsp;&nbsp;{{ trans('main.unfollow') }}</a>
                @endif
                <label class="buttons"><span class="homeicon mdi mdi-account-heart"></span><p>{{ $follow_count }}&nbsp;{{ trans('main.followers') }}</p></label>
                <label class="buttons"><span class="homeicon mdi mdi-library-video"></span><p>{!! count($videos) !!} {{ trans('main.courses') }}</p></label>
                <label class="buttons"><span class="homeicon mdi mdi-clock"></span><p class="duration-f">{{ $duration }}&nbsp;{{ trans('main.minutes_stat') }}</p></label> -->
        </div>
    </div>

    <div class="container-fluid profile-middle-background">
        <div class="container">
            <div class="col-md-2 col-xs-12 profile-avatar-container tab-con">
                <img class="sbox3" src="{{ !empty($meta['avatar']) ? $meta['avatar'] : get_option('default_user_avatar','') }}"/>
                <!-- <div class="rate-section raty"></div> -->
            </div>
            <div class="location-section col-md-10 col-xs-12">
                <div class="profile_name_item"><b>{{ $profile->name }}</b></div>
                <div class="profile_register_date_item"><b>{{ trans('main.registration_date') }}: {{ date('d F Y',$profile->created_at) }}</b></div>
            </div>
        </div>
    </div><br><br>

    
    <div class="container-fluid ">
       <div class="container">
         <div class="col-md-12 col-xs-12">
            <ul class="nav nav-tabs nav-justified panel-tabs" role="tablist">
                <li class="@yield('tab1')">
                    <a href="/user/article/list">
                        <span class="submicon mdi mdi-newspaper-variant-multiple-outline"></span>
                       Weekly Dashboard
                    </a>
                </li>
                <!-- <li class="@yield('tab2')">
                    <a href="/user/certificates">
                        <span class="submicon mdi mdi-certificate"></span>
                        {{ trans('main.certificates') }}
                    </a>
                </li> -->
            </ul>
            <div class="tab-content">
                <div class="active tab-pane fade in" id="tab1">
                    @yield('tab')
                </div>
            </div>
        </div>
     </div>
</div>
    <div class="h-10"></div>

    <div class="container-fluid bg-gray-s">
   
        <div class="row ucp-menu-item">
            <div class="container">
                <div class="seven-cols">
                    <!-- <div class="col-md-1 col-sm-6 col-xs-6 tab-con">
                        <a href="javascript:void(0)" tab-id="t-biography" class="item-box sbox3 arrow_box">
                            <span class="micon mdi mdi-account-tie"></span>
                            <span>{{ trans('main.profile') }}</span>
                        </a>
                    </div>
                    <div class="col-md-1 col-sm-6 col-xs-6 tab-con">
                        <a href="javascript:void(0)" tab-id="t-videos" class="item-box sbox3">
                            <span class="micon mdi mdi-library-video"></span>
                            <span>{{ trans('main.courses') }}</span>
                        </a>
                    </div>
                    <div class="h-10 visible-xs"></div>
                    <div class="col-md-1 col-sm-6 col-xs-6 tab-con">
                        <a href="javascript:void(0)" tab-id="t-channels" class="item-box sbox3">
                            <span class="micon mdi mdi-bullhorn"></span>
                            <span>{{ trans('main.channels') }}</span>
                        </a>
                    </div>
                    <div class="col-md-1 col-sm-6 col-xs-6 tab-con">
                        <a href="javascript:void(0)" tab-id="t-medals" class="item-box sbox3">
                            <span class="micon mdi mdi-medal"></span>
                            <span>{{ trans('main.badges') }}</span>
                        </a>
                    </div>
                    <div class="h-10 visible-xs"></div>
                    <div class="col-md-1 col-sm-6 col-xs-6 tab-con">
                        <a href="javascript:void(0)" tab-id="t-record" class="item-box sbox3">
                            <span class="micon mdi mdi-video"></span>
                            <span>{{ trans('main.future_courses') }}</span>
                        </a>
                    </div>
                    <div class="col-md-1 col-sm-6 col-xs-6 tab-con">
                        <a href="javascript:void(0)" tab-id="t-article" class="item-box sbox3">
                            <span class="micon mdi mdi-notebook"></span>
                            <span>{{ trans('main.articles') }}</span>
                        </a>
                    </div>
                    <div class="h-10 visible-xs"></div>
                    <div class="col-md-1 col-sm-6 col-xs-12 tab-con">
                        <a href="javascript:void(0)" tab-id="t-request" class="item-box sbox3">
                            <span class="micon mdi mdi-camera-enhance"></span>
                            <span>{{ trans('main.request_course') }}</span>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-gray-s"> 
        <div class="container">
       
        <!--start exam review  -->
        <div class="col-xs-12 remove-padding-xs">
        
            <div id="t-biography" class="profile-section-fade profile-section sbox3 doview">
                <div class="row">

                @if(empty($last))
                                    <div class="text-center">
                                        <img src="/assets/default/images/empty/Request.png">
                                        <div class="h-20"></div>
                                        <span class="empty-first-line">{{ trans('main.no_quizzes') }}</span>
                                        <div class="h-10"></div>

                                        <div class="h-20"></div>
                                    </div>

                @else
                    <div class="col-md-12 text-center">
                        <h1>My DeepDive</h1>
                            <div class="accordion-off col-xs-12">
                                <ul id="accordion" class="accordion off-filters-li">
                                  <li class="open">
                    
                                      <div class="link"><h2><span class="usericon mdi mdi-credit-card-settings"></span>Exam Summary</h2><i class="mdi mdi-chevron-down"></i></div>
                                          <ul class="submenu dblock">
                                             <div class="h-10"></div>
                          
                                                 <div class="form-group">
                                                  <!-- <span class="dis-block"><h3>Questions you answered wrong</h3></span><br> -->
                                                    <div class="col-md-12 tab-con">
                                                        <div class="h-5"></div>
                                                             <?php $i = 0 ?>
                                                                <span class="dis-block"><h2>Simulated Exam:0{{ $w1 }}</h2></span> 
                                                                    <div class="h-10"></div>
                            
                                                        </div>
                                                           <div class="col-md-12">
                                                             <div class="col-md-4">
                            
                                                                 <span class="dis-block"><h3>Overall Score:{{$last->user_grade}}</h3></span>
                                
                                                              </div>
                                                                 <div class="col-md-4 text-center">
                                                                      <div class="result-card">
                                                                         <img src="/assets/default/images/cup.PNG" alt="">
                                                                            <span class="dis-block"><h2>Exam Result: {{$last->status}}</h2></span>
                                                                      </div>
                                                                 </div>
                                                                    <div class="col-md-4">
                                                                         <?php $i += 1 ?>
                                                                              <span class="dis-block"><h3>Date Attended #W{{ $i}}</h3></span>
                                                                    </div>
                                                            </div>
                                                    </div>
                                              <!-- </div> -->
                                           </ul>
                                      </div>
                                  </li>
                              </ul>
                          </div>


<!-- <div class="accordion-off col-xs-12">
<ul id="accordion" class="accordion off-filters-li"> -->
                    <!-- <li class="open"> -->
<!-- <div class="link"><h2><span class="usericon mdi mdi-credit-card-settings"></span>Questions you answered wrong</h2><i class="mdi mdi-chevron-down"></i></div> -->
                        <!-- <ul class="submenu dblock"> -->
                            <div class="h-10"></div>
                          
                                <div class="form-group">
                                    <!-- <span class="dis-block"><h3>Questions you answered wrong</h3></span><br> -->
                                    <div class="col-md-12 tab-con">
                                    {{-- @foreach ($question->questions as $question1)
                                        <h3 class="question-title">{{ $loop->iteration }} - {{ $question1->title }}</h3>
                                            @if(!empty($question1->image))
                                            <div class="image-container">
                                                 <img src="{{ $question1->image }}" class="fit-image" alt="">
                                            </div>
                                           
                                            @endif
                                    @endforeach --}}
                                    
                                    <!-- <span class="dis-block"><h3>Questions you answered wrong</h3></span><br> -->
                        <!-- <span><h4>Q1:In a project execution the project manager can't find the resources. To get out from this problem he should look into ?</h4>
                        <button class="btn btn-primary"  onclick="myFunction()">Explanation</button></span>
                        <div id="myDIV">
                    <span style="font-size:15px;">When project team members stay in different areas they are called virtual team. They are part of project team..</span>
                   
                    </div>
                        <span><h4>Q2:In a project the project manager see that a person lack competency of the required job.What should he do?</h4></span>
                        <button class="btn btn-primary"  onclick="myFunction()">Explanation</button></span>
                        <div id="myDIV">
                    <span style="font-size:15px;">When project team members stay in different areas they are called virtual team. They are part of project team..</span>
                   
                    </div>
                        <span><h4>Q3:As the project team decomposes the work in the WBS, they begin to populate product backlog. When must the team have the product backlog finished??</h4></span>
                        <button class="btn btn-primary"  onclick="myFunction()">Explanation</button></span>
                        <div id="myDIV">
                    <span style="font-size:15px;">When project team members stay in different areas they are called virtual team. They are part of project team..</span>
                   
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


                        <!-- </div> -->
                </div>
            </div>
                                    </div>
                                   
                                    
                                </div>
                         
                            <div class="h-10"></div>
                        <!-- </ul> -->
                        <!-- </ul> -->
                        <!-- </li> -->
                        </div>


                        <div class="col-md-12">
                       
        </div>

        <!--end  exam review  -->
        <!-- <div class="row align-items-start">
    <span class="dis-block"><h2>Simulated Exam:1</h2></span>
    </div> -->

            <div class="col-xs-12 remove-padding-xs">

                <div id="t-biography" class="profile-section-fade profile-section sbox3 doview">
                    <div class="row">
                        <!-- <div class="col-md-3 col-xs-12 col-sm-6 text-center">
                            <h4>{{ trans('main.courses_feedback') }}</h4>
                            <div class="h-5"></div>
                            <span class="dis-block">({{ $video_rate }})</span>
                            <div class="h-10"></div>
                            <div class="progress" dir="ltr">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="3.4"
                                     aria-valuemin="1" aria-valuemax="5" style="width:{{ ($video_rate/5)*100 }}%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6 text-center">
                            <h4>{{ trans('main.support_feedback') }}</h4>
                            <div class="h-5"></div>
                            <span class="dis-block">({{ $support_rate }})</span>
                            <div class="h-10"></div>
                            <div class="progress" dir="ltr">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="{{ $support_rate }}"
                                     aria-valuemin="1" aria-valuemax="5" style="width:{{ ($support_rate / 5) * 100 }}%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6 text-center">
                            <h4>{{ trans('main.postal_feedback') }}</h4>
                            <div class="h-5"></div>
                            <span class="dis-block">({{ $sell_rate }})</span>
                            <div class="h-10"></div>
                            <div class="progress" dir="ltr">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="{{ $sell_rate }}"
                                     aria-valuemin="1" aria-valuemax="5" style="width:{{ ($sell_rate / 5) * 100 }}%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 col-sm-6 text-center">
                            <h4>{{ trans('main.articles_feedback') }}</h4>
                            <div class="h-5"></div>
                            <span class="dis-block">({{ $article_rate }})</span>
                            <div class="h-10"></div>
                            <div class="progress" dir="ltr">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $article_rate }}"
                                     aria-valuemin="1" aria-valuemax="5" style="width:{{ ($article_rate / 5) * 100 }}%">
                                </div>
                            </div>
                        </div> -->

                          <!-- extra graph  -->

                          <div class="col-md-12 text-center">
                            <h4>Simulated Exam Result</h4>
                            <div class="h-5"></div>
                            <!-- <span class="dis-block"><h2 style="color:#bb48e6">Your Overall Score: {{$countans}}%</h2></span> -->
                            <div class="h-10"></div>
                            <!-- <div class="progress" dir="ltr">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{ $article_rate }}"
                                     aria-valuemin="1" aria-valuemax="5" style="width:{{ ($countans /70) * 100 }}%">
                                </div>
                            </div> -->
                        </div>
                        <script>function generateBarGraph(r)
                                {if(function(){var r=window.requestAnimationFrame||window.mozRequestAnimationFrame||
                                window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;window.requestAnimationFrame=r}
                                (),null==r.barData||null==r.barData||!Array.isArray(r.barData))return!1;
                                for(var a=r.hasOwnProperty("barId")?r.barId:"rbar",e=r.hasOwnProperty("barStroke")?r.barStroke:50,i=r.hasOwnProperty("barSpaces")?r.barSpaces:80,n=r.hasOwnProperty("barDivision")?r.barDivision:5,t=r.hasOwnProperty("barColour")?r.barColour:"#020202",o=r.hasOwnProperty("barInnerPadding")?r.barInnerPadding:80,s=r.hasOwnProperty("barDivisionPositionFromLineX")?r.barDivisionPositionFromLineX:20,l=r.hasOwnProperty("barDivisionPositionFromLineY")?r.barDivisionPositionFromLineY:20,h=!r.hasOwnProperty("barAnimation")||r.barAnimation,b=r.hasOwnProperty("barAnimationSpeed")?r.barAnimationSpeed:1,u=r.hasOwnProperty("barTextFont")?r.barTextFont:"14px Arial",y=!r.hasOwnProperty("barScaleDivisionReqX")||r.barScaleDivisionReqX,v=!r.hasOwnProperty("barScaleDivisionReqY")||r.barScaleDivisionReqY,d=r.hasOwnProperty("barScaleDivisionY")?r.barScaleDivisionY:null,m=r.hasOwnProperty("barScaleDivisionStroke")?r.barScaleDivisionStroke:1,w=r.hasOwnProperty("barScaleDivisionColour")?r.barScaleDivisionColour:"#333",p=r.hasOwnProperty("barAxisLineStroke")?r.barAxisLineStroke:1,P=r.hasOwnProperty("barScaleDivisionColour")?r.barAxisLineColour:"#333",c=r.hasOwnProperty("barMaxHeight")?r.barMaxHeight:null,S=document.getElementById(a),A=S.getContext("2d"),O=S.width,D=S.height,f=[],g=[],x=function(r){for(var a=[],e=[],i=[],n=[],t=0;t<r.length;t++)e.push(Object.values(r[t])[0]),i.push(Object.keys(r[t])[0]),n.push(Object.values(r[t])[0]);return a.highest=Math.max(...e),a.xdata=n,a.ydata=i,a}(r.barData),k=D-o,F=null==c?x.highest:c,T=((k-o)/F).toFixed(1),q=o+i-e/2,C=0;C<x.ydata.length;C++){var I=x.xdata[C]*T,L=k-I;f.push(q),g.push(Math.round(L)),0==h&&(Array.isArray(t)?B(A,t[C],e,q,k,L):B(A,t,e,q,k,L)),q+=i}for(var M=0;M<x.ydata.length;M++)A.font=u,A.textAlign="center",A.fillText(x.ydata[M],f[M],D-o+s),y&&z(A,m,w,f[M],k-2,f[M],k+2);var R=null==c?x.highest:c,Y=0,W=0,X=0;null!=d?(W=Math.round(R/d),Y=d):(W=n,Y=Math.round(R/n));for(M=0;M<W;M++){X=(X+=Y)<=R?X:R;var j=Math.round(X*T);A.font=u,A.textBaseline="middle",A.fillText(X,o-l,k-j),v&&H(A,m,w,o-2,k-j,o+2,k-j)}function B(r,a,e,i,n,t){r.beginPath(),r.strokeStyle=a,r.lineWidth=e,r.moveTo(i,n),r.lineTo(i,t),r.stroke()}function H(r,a,e,i,n,t,o){r.strokeStyle=e,r.lineWidth=a,r.beginPath(),r.moveTo(i,n),r.lineTo(t,o),r.stroke()}function z(r,a,e,i,n,t,o){r.strokeStyle=e,r.lineWidth=a,r.beginPath(),r.moveTo(i,n),r.lineTo(t,o),r.stroke()}!function(){var r=k;if(0==b){var a=0;!function i(){null!=g[a]&&(Array.isArray(t)?B(A,t[a],e,f[a],k,r):B(A,t,e,f[a],k,r),r>g[a]?requestAnimationFrame(i):r<=g[a]&&(r=k,a++,requestAnimationFrame(i)),r-=1)}()}else var a=0,i=setInterval(function(){null==f[a]&&clearInterval(i),Array.isArray(t)?B(A,t[a],e,f[a],k,r):B(A,t,e,f[a],k,r),r<=g[a]&&(r=k,a++),r-=1},b)}(),A.strokeStyle=P,A.lineWidth=p,A.beginPath(),A.moveTo(o,D-o),A.lineTo(O-o,D-o),A.moveTo(o,o-10),A.lineTo(o,D-o),A.stroke()}</script> 
                    <div class="col-md-12 text-center">
                    <span><h2>Domain Wise</h2></span>
                                <canvas id="myCanvas" width="1000" height="500" style="border:1px solid #d3d3d3;">
                                Your browser does not support the HTML5 canvas tag.</canvas>

                                <script type="application/javascript">
                                    

                                    var data = [{'People':{{$sub_total2}}}, {'Process': {{$sub_total3}}}, {'environment':{{$sub_total4}}}];
                                    var barcolor = ['rgba(74,176,181, 0.9)','rgba(225,178,70,0.8)', 'rgba(190,188,167,0.9)', '#ff1f9c', '#ff3c75', '#ff6250', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
                                    var obj = {
                                                barId: 'myCanvas', // Need To pass canvas id  and mandatory to generate the bar graph
                                                barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
                                                barColour: barcolor, // Bar colour as array and the default value is '#020202'
                                                barStroke: 40, // Bar Stroke as per your requirement and the default value is 50
                                                barSpaces: 80, // Space between 2 bar graph and the default value is 80
                                                barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
                                                barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
                                                barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
                                                barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
                                                barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
                                                barTextFont: "14px Arial", // Define font size with font family name and the default value is 14px Arial
                                                barDivision: 5, // Define the division to the Y-Axis and the default value is 5
                                                barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
                                                barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
                                                barScaleDivisionY: 10, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null 
                                                barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
                                                barScaleDivisionColour: '#333', //Define the stroke colour of the scale division and the default value is #333
                                                barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
                                                barAxisLineColour: '#333', //Define the stroke colour of the X & Y-axis line and the default value is #333
                                                barMaxHeight: 100 // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
                                            };
                                    
                                    generateBarGraph(obj);
                                    
                                </script>
                                </div>
                                <div class="col-md-12  text-center">
                                <span><h2>Methodology Wise</h2></span>
                                <canvas id="myCanvas1" width="1000" height="500" style="border:1px solid #d3d3d3;">
                               </canvas>

                                <script type="application/javascript">
                                    
                                    // [{{$sub_total}}, {{$sub_total1}},{{$sub_total2}}, {{$sub_total3}}, {{$sub_total4}}]
                                    var data = [{'Predictive':{{$sub_total}}}, {'Agile/Hybrid': {{$sub_total1}}}];
                                    var barcolor = ['rgba(74,176,181, 0.9)','rgba(225,178,70,0.8)', '#45D29A', '#ff862d', '#ff1f9c', '#ff3c75', '#ff6250', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
                                    var obj = {
                                                barId: 'myCanvas1', // Need To pass canvas id  and mandatory to generate the bar graph
                                                barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
                                                barColour: barcolor, // Bar colour as array and the default value is '#020202'
                                                barStroke: 40, // Bar Stroke as per your requirement and the default value is 50
                                                barSpaces: 80, // Space between 2 bar graph and the default value is 80
                                                barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
                                                barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
                                                barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
                                                barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
                                                barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
                                                barTextFont: "14px Arial", // Define font size with font family name and the default value is 14px Arial
                                                barDivision: 5, // Define the division to the Y-Axis and the default value is 5
                                                barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
                                                barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
                                                barScaleDivisionY: 10, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null 
                                                barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
                                                barScaleDivisionColour: '#333', //Define the stroke colour of the scale division and the default value is #333
                                                barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
                                                barAxisLineColour: '#333', //Define the stroke colour of the X & Y-axis line and the default value is #333
                                                barMaxHeight: 100 // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
                                            };
                                    
                                    generateBarGraph(obj);
                                    
                                </script>
                                </div>



                                <!-- <div class="col-md-12  text-center">
                                <span><h2>Lesson Wise</h2></span>
                                <canvas id="myCanvas2" width="1050" height="500" style="border:1px solid #d3d3d3;">
                               </canvas>

                                <script type="application/javascript">
                                    

                                    var data = [{'Doing The Work': 40}, {'Starting the Project': 20},{'Keeping team on track': 50}, {'Buliding High performing team': 10}];
                                    var barcolor = ['#bb48e6', '#ff3c75','#FF3333','#f12bc3', '#ff3c75', '#ff6250', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
                                    var obj = {
                                                barId: 'myCanvas2', // Need To pass canvas id  and mandatory to generate the bar graph
                                                barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
                                                barColour: barcolor, // Bar colour as array and the default value is '#020202'
                                                barStroke: 40, // Bar Stroke as per your requirement and the default value is 50
                                                barSpaces: 180, // Space between 2 bar graph and the default value is 80
                                                barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
                                                barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
                                                barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
                                                barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
                                                barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
                                                barTextFont: "14px Arial", // Define font size with font family name and the default value is 14px Arial
                                                barDivision: 5, // Define the division to the Y-Axis and the default value is 5
                                                barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
                                                barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
                                                barScaleDivisionY: 20, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null 
                                                barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
                                                barScaleDivisionColour: '#333', //Define the stroke colour of the scale division and the default value is #333
                                                barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
                                                barAxisLineColour: '#333', //Define the stroke colour of the X & Y-axis line and the default value is #333
                                                barMaxHeight: 120 // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
                                               
                                            };
                                    
                                    generateBarGraph(obj);
                                    
                                </script>
                                </div> -->

                                <!-- <div class="col-md-12  text-center">
                                        <span><h2>Lesson Wise</h2></span>
                                        <canvas id="marksChart" width="300" height="150"></canvas>
                               </div> -->
                               <div class="col-md-12  text-center">
                                        <span><h2>Lesson Wise</h2></span>
                                         <canvas id="marksChart" width="300" height="150"></canvas>
                                       
                               </div>
                               @endif      

                    </div>
         
                    <!-- extra graph  -->


                    <!-- <div class="h-20"></div>
                    @if(!isset($meta['biography']))
                        <div class="text-center">
                            <img src="/assets/default/images/empty/biography.png">
                            <div class="h-20"></div>
                            <span class="empty-first-line">{{ trans('main.no_biography') }}</span>
                            <div class="h-20"></div>
                        </div>
                    @else
                        {{ $meta['biography'] }}
                    @endif 
                </div> -->

                <div id="t-videos" class="profile-section-fade newest-container newest-container-p">
                    <div class="body body-target-s">
                        <div class="row">
                            @foreach($videos as $vid)
                                <?php $meta = arrayToList($vid->metas, 'option', 'value'); ?>
                                <div class="col-md-3 col-sm-6 col-xs-12 tab-con">
                                    <a href="/product/{{ $vid->id }}" title="{{ $vid->title }}" class="content-box">
                                        <img src="{{ !empty($meta['thumbnail']) ? $meta['thumbnail'] : '' }}"/>
                                        <h3>{!! truncate($vid->title,35) !!}</h3>
                                        <div class="footer">
                                            <label class="pull-right">{!! contentDuration($vid->id) ?? '' !!}</label>
                                            <span class="boxicon mdi mdi-clock pull-right"></span>
                                            <span class="boxicon mdi mdi-wallet pull-left"></span>
                                            <label class="pull-left">{{ currencySign() }}{{ $meta['price'] ?? 0 }}</label>
                                        </div>
                                    </a> 
                                </div>
                            @endforeach
                            @if(count($videos) == 0)
                                <div class="text-center">
                                    <img src="/assets/default/images/empty/Videos.png">
                                    <div class="h-20"></div>
                                    <span class="empty-first-line">{{ trans('main.no_course_profile') }}</span>
                                    <div class="h-20"></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div> 

                <div id="t-channels" class="profile-section-fade newest-container newest-container-p">
                    <div class="body body-target-s">
                        <div class="row">
                            @foreach($channels as $channel)
                                <div class="col-md-3 col-sm-6 col-xs-12 tab-con">
                                    <a href="/chanel/{{ $channel->username }}" title="{{ $channel->title }}" class="content-box">
                                        <img src="{{ $channel->avatar }}"/>
                                        <h3>{!! truncate($channel->title,35) !!}</h3>
                                    </a>
                                </div>
                            @endforeach
                            @if(count($channels) == 0)
                                <div class="text-center">
                                    <img src="/assets/default/images/empty/channel.png">
                                    <div class="h-20"></div>
                                    <span class="empty-first-line">{{ trans('main.no_channel_profile') }}</span>
                                    <div class="h-20"></div>
                                </div>
                            @endif 
                        </div>
                    </div>
                </div>

                <div id="t-medals" class="profile-section-fade newest-container newest-container-e">
                    <div class="row">
                        @foreach($rates as $rate)
                            <div class="col-md-3 col-xs-12 tab-con">
                                <div class="product-card">
                                    <h2>{{ $rate['description'] }}</h2>
                                    <h4>
                                        <?php $middle = explode(',', $rate['value']); ?>
                                        {{ trans('main.From') }}
                                        {{ $middle[0] }}
                                        {{ trans('main.to') }}
                                        {{ $middle[1] }}
                                        @if($rate['mode'] == 'videocount')
                                            {{ 'Courses' }}
                                        @elseif($rate['mode'] == 'day')
                                            {{ 'Reg. Days' }}
                                        @elseif($rate['mode'] == 'buycount')
                                            {{ 'Purchases' }}
                                        @elseif($rate['mode'] == 'sellcount')
                                            {{ 'Sales' }}
                                        @else
                                            {{ 'Rates' }}
                                        @endif
                                    </h4>
                                    <figure>
                                        <img src="{{ $rate['image'] }}" alt="{{ $rate['description'] }}"/>
                                    </figure>
                                </div>
                            </div>
                        @endforeach
                        @if(count($rates) == 0)
                            <div class="text-center">
                                <img src="/assets/default/images/empty/discount.png">
                                <div class="h-20"></div>
                                <span class="empty-first-line">{{ trans('main.no_badge') }}</span>
                                <div class="h-20"></div>
                            </div>
                        @endif 
                    </div>
              
                </div>

                <div id="t-article" class="profile-section-fade newest-container newest-container-p">
                    <div class="body body-target-s body-target-s">
                        <div class="blog-section body-target-s">
                            @foreach($articles as $article)
                                <div class="col-md-3 col-sm-6 col-xs-12 tab-con">
                                    <a href="/article/item/{{ $article->id }}" title="{{ $article->title }}" class="content-box">
                                        <img src="{{ $article->image }}"/>
                                        <h3>{!! truncate($article->title,35) !!}</h3>
                                    </a>
                                </div>
                            @endforeach
                            @if($articles->count() == 0)
                                <div class="text-center">
                                    <img src="/assets/default/images/empty/articles.png">
                                    <div class="h-20"></div>
                                    <span class="empty-first-line">{{ trans('main.no_articles_profile') }}</span>
                                    <div class="h-20"></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div id="t-request" class="profile-section-fade newest-container newest-container-e">
                    <div class="body body-target-s">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 tab-con">
                                <div class="ucp-section-box white-s">
                                    <div class="header back-orange">{{ trans('main.request_course') }}</div>
                                    <div class="body body-target-s">
                                        <form method="post" action="/profile/request/store">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_id" value="{{ $profile->id }}">
                                            <div class="form-group">
                                                <label class="control-label" for="inputDefault">{{ trans('main.title') }}</label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="inputDefault">{{ trans('main.category') }}</label>
                                                <select name="category_id" class="form-control font-s" required>
                                                    @foreach($menus as $menu)
                                                        <optgroup label="{{ $menu['title'] }}">
                                                            @foreach($menu['submenu'] as $sub)
                                                                <option value="{{ $sub['id'] }}">{{ $sub['title'] }}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="inputDefault">{{ trans('main.description') }}</label>
                                                <textarea name="description" rows="5" class="form-control" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-custom" value="save">{{ trans('main.save_changes') }}</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12 tab-con">
                                <div class="ucp-section-box white-s">
                                    <div class="header back-orange">{{ trans('main.req_rules') }}</div>
                                    <div class="body body-target-s">
                                        {!! get_option('request_term') !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="t-record" class="profile-section-fade newest-container newest-container-p">
                    <div class="body bodt-target-s">
                        <div class="row">
                            @foreach($record as $vid)
                                <?php $meta = arrayToList($vid->metas, 'option', 'value'); ?>
                                <div class="col-md-3 col-sm-6 col-xs-12 tab-con">
                                    <a href="/product/{{ $vid->id }}" title="{{ $vid->title }}" class="content-box">
                                        <img src="{{ $vid->image }}"/>
                                        <h3>{!! truncate($vid->title,35) !!}</h3>
                                        <div class="footer">
                                            <label class="pull-left">{{ $vid->category->title ?? '' }}</label>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            @if(count($record) == 0)
                                <div class="text-center">
                                    <img src="/assets/default/images/empty/recording.png">
                                    <div class="h-20"></div>
                                    <span class="empty-first-line">{{ trans('main.no_future_profile') }}</span>
                                    <div class="h-20"></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  

@section('script')
    <!-- <script>
        $(document).ready(function () {
            $('.ucp-menu-item a').click(function () {
                var id = $(this).attr('tab-id');
                $('.ucp-menu-item a').removeClass('arrow_box');
                $(this).addClass('arrow_box');
                $('.profile-section-fade').not('#' + id).fadeOut(500, function () {
                    $('#' + id).fadeIn(500);
                });
            })
        })
    </script>
    <script>
        $('.raty').raty({starType: 'i'});
    </script> -->
    <script>
//     var marksCanvas = document.getElementById("marksChart");

// var marksData = {
//   labels: ["Doing the work", "keeping team on the track", "Starting the project", "Building high performing team", "Keeping The Business In Mind"],
//   datasets: [{
//     label: "category",
//     backgroundColor: "rgba(252, 255, 51 , 0.6)",
//     data: [40, 80, 80, 89, 77, 82]
//   }, {
//     label: "No of questions",
//     backgroundColor: "#33C4FF",
//     data: [50, 40, 67, 79, 90, 25]
//   }]
// };

// var radarChart = new Chart(marksCanvas, {
//   type: 'radar',
//   data: marksData
// });
        var marksCanvas = document.getElementById("marksChart");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var marksData = {
        labels: ["Doing the work", "keeping team on the track", "Starting the project", "Building high performing team", "Keeping The Business In Mind"],
        datasets: [
            {
            label: "Last Exam %",
            backgroundColor: "transparent",
            borderColor: "rgba(74,176,181, 0.9)",
            fill: false,
            radius: 6,
            pointRadius: 6,
            pointBorderWidth: 3,
            pointBackgroundColor: "rgba(1,191,194, 0.9)",
            pointBorderColor: "rgba(1,191,194, 0.9)",
            pointHoverRadius: 10,
            // data: [65, 75, 70, 80, 60]
           
            data: [{{$sub_total}}, {{$sub_total1}},{{$sub_total2}}, {{$sub_total3}}, {{$sub_total4}}]

         
        },
        {
            label: "This Exam %",
            backgroundColor: "transparent",
            borderColor: "rgba(225,178,70,0.8)",
            fill: false,
            radius: 6,
            pointRadius: 6,
            pointBorderWidth: 3,
            pointBackgroundColor: "rgba(255,226,0)",
            pointBorderColor: "rgba(255,226,0)",
            pointHoverRadius: 10,
            data: [{{$subtotal}}, {{$subtotal1}},{{$subtotal2}}, {{$subtotal3}}, {{$subtotal4}}]
        }]
        };

        var chartOptions = {
        scale: {
            ticks: {
            beginAtZero: true,
            min: 0,
            max: 100,
            stepSize: 20
            },
            pointLabels: {
            fontSize: 18
            }
        },
        legend: {
            position: 'right'
        }
        };

        var radarChart = new Chart(marksCanvas, {
        type: 'radar',
        data: marksData,
        options: chartOptions
        });
    </script>
@endsection


@endsection
