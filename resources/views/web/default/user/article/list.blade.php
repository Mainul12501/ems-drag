@extends(getTemplate().'.user.layout.articlelayout')

@section('tab2','active')
@section('tab')
<div class="col-xs-12 remove-padding-xs">
<ul class="nav nav-tabs nav-justified panel-tabs" role="tablist">
                {{-- <li class="@yield('tab1')">
                    <a href="/profile/{{ $user['id'] }}">
                        <span class="submicon mdi mdi-newspaper-variant-multiple-outline"></span>
                       Go Back to Simulated Exam Result
                    </a>
                </li> --}}
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
        <div id="t-biography" class="profile-section-fade profile-section sbox3 doview">
        
            <div class="row">
            
            <script>function generateBarGraph(r)
{if(function(){var r=window.requestAnimationFrame||window.mozRequestAnimationFrame||
window.webkitRequestAnimationFrame||window.msRequestAnimationFrame;window.requestAnimationFrame=r}
(),null==r.barData||null==r.barData||!Array.isArray(r.barData))return!1;
for(var a=r.hasOwnProperty("barId")?r.barId:"rbar",e=r.hasOwnProperty("barStroke")?r.barStroke:50,i=r.hasOwnProperty("barSpaces")?r.barSpaces:80,n=r.hasOwnProperty("barDivision")?r.barDivision:5,t=r.hasOwnProperty("barColour")?r.barColour:"#020202",o=r.hasOwnProperty("barInnerPadding")?r.barInnerPadding:80,s=r.hasOwnProperty("barDivisionPositionFromLineX")?r.barDivisionPositionFromLineX:20,l=r.hasOwnProperty("barDivisionPositionFromLineY")?r.barDivisionPositionFromLineY:20,h=!r.hasOwnProperty("barAnimation")||r.barAnimation,b=r.hasOwnProperty("barAnimationSpeed")?r.barAnimationSpeed:1,u=r.hasOwnProperty("barTextFont")?r.barTextFont:"14px Arial",y=!r.hasOwnProperty("barScaleDivisionReqX")||r.barScaleDivisionReqX,v=!r.hasOwnProperty("barScaleDivisionReqY")||r.barScaleDivisionReqY,d=r.hasOwnProperty("barScaleDivisionY")?r.barScaleDivisionY:null,m=r.hasOwnProperty("barScaleDivisionStroke")?r.barScaleDivisionStroke:1,w=r.hasOwnProperty("barScaleDivisionColour")?r.barScaleDivisionColour:"#333",p=r.hasOwnProperty("barAxisLineStroke")?r.barAxisLineStroke:1,P=r.hasOwnProperty("barScaleDivisionColour")?r.barAxisLineColour:"#333",c=r.hasOwnProperty("barMaxHeight")?r.barMaxHeight:null,S=document.getElementById(a),A=S.getContext("2d"),O=S.width,D=S.height,f=[],g=[],x=function(r){for(var a=[],e=[],i=[],n=[],t=0;t<r.length;t++)e.push(Object.values(r[t])[0]),i.push(Object.keys(r[t])[0]),n.push(Object.values(r[t])[0]);return a.highest=Math.max(...e),a.xdata=n,a.ydata=i,a}(r.barData),k=D-o,F=null==c?x.highest:c,T=((k-o)/F).toFixed(1),q=o+i-e/2,C=0;C<x.ydata.length;C++){var I=x.xdata[C]*T,L=k-I;f.push(q),g.push(Math.round(L)),0==h&&(Array.isArray(t)?B(A,t[C],e,q,k,L):B(A,t,e,q,k,L)),q+=i}for(var M=0;M<x.ydata.length;M++)A.font=u,A.textAlign="center",A.fillText(x.ydata[M],f[M],D-o+s),y&&z(A,m,w,f[M],k-2,f[M],k+2);var R=null==c?x.highest:c,Y=0,W=0,X=0;null!=d?(W=Math.round(R/d),Y=d):(W=n,Y=Math.round(R/n));for(M=0;M<W;M++){X=(X+=Y)<=R?X:R;var j=Math.round(X*T);A.font=u,A.textBaseline="middle",A.fillText(X,o-l,k-j),v&&H(A,m,w,o-2,k-j,o+2,k-j)}function B(r,a,e,i,n,t){r.beginPath(),r.strokeStyle=a,r.lineWidth=e,r.moveTo(i,n),r.lineTo(i,t),r.stroke()}function H(r,a,e,i,n,t,o){r.strokeStyle=e,r.lineWidth=a,r.beginPath(),r.moveTo(i,n),r.lineTo(t,o),r.stroke()}function z(r,a,e,i,n,t,o){r.strokeStyle=e,r.lineWidth=a,r.beginPath(),r.moveTo(i,n),r.lineTo(t,o),r.stroke()}!function(){var r=k;if(0==b){var a=0;!function i(){null!=g[a]&&(Array.isArray(t)?B(A,t[a],e,f[a],k,r):B(A,t,e,f[a],k,r),r>g[a]?requestAnimationFrame(i):r<=g[a]&&(r=k,a++,requestAnimationFrame(i)),r-=1)}()}else var a=0,i=setInterval(function(){null==f[a]&&clearInterval(i),Array.isArray(t)?B(A,t[a],e,f[a],k,r):B(A,t,e,f[a],k,r),r<=g[a]&&(r=k,a++),r-=1},b)}(),A.strokeStyle=P,A.lineWidth=p,A.beginPath(),A.moveTo(o,D-o),A.lineTo(O-o,D-o),A.moveTo(o,o-10),A.lineTo(o,D-o),A.stroke()}</script> 
<div class="col-md-12 text-center">
                    <span><h2>Weekly Trend Domain Wise</h2></span>
                                <canvas id="myCanvas" width="1000" height="500" style="border:1px solid #d3d3d3;">
                                Your browser does not support the HTML5 canvas tag.</canvas>
                                <script type="application/javascript">
                                     

                                    var data = [{'People': 0}, {'Process': 0}, {'environment': 0},{'People': 0}, {'Process': 0}, {'environment': 0}];
                                    var barcolor = ['rgba(74,176,181, 0.9)', 'rgba(225,178,70,0.8)', 'rgba(190,188,167,0.9)', 'rgba(74,176,181, 0.9)', 'rgba(225,178,70,0.8)', 'rgba(190,188,167,0.9)', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
                                    var obj = {
                                                barId: 'myCanvas', // Need To pass canvas id  and mandatory to generate the bar graph
                                                barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
                                                barColour: barcolor, // Bar colour as array and the default value is '#020202'
                                                barStroke: 25, // Bar Stroke as per your requirement and the default value is 50
                                                barSpaces: 50, // Space between 2 bar graph and the default value is 80
                                                barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
                                                barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
                                                barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
                                                barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
                                                barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
                                                barTextFont: "10px Arial", // Define font size with font family name and the default value is 14px Arial
                                                barDivision: 10, // Define the division to the Y-Axis and the default value is 5
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
                                <span><h2>Weekly Trend Methodology Wise</h2></span>
                                <canvas id="myCanvas1" width="1000" height="500" style="border:1px solid #d3d3d3;">
                               </canvas>

                                <script type="application/javascript">
                                    

                                    var data = [{'Predictive': 0}, {'Agile/Hybrid': 0}];
                                    var barcolor = ['rgba(74,176,181, 0.9)', 'rgba(225,178,70,0.8)', 'rgba(190,188,167,0.9)', '#ff862d', '#ff1f9c', '#ff3c75', '#ff6250', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
                                    var obj = {
                                                barId: 'myCanvas1', // Need To pass canvas id  and mandatory to generate the bar graph
                                                barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
                                                barColour: barcolor, // Bar colour as array and the default value is '#020202'
                                                barStroke: 30, // Bar Stroke as per your requirement and the default value is 50
                                                barSpaces: 80, // Space between 2 bar graph and the default value is 80
                                                barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
                                                barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
                                                barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
                                                barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
                                                barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
                                                barTextFont: "14px Arial", // Define font size with font family name and the default value is 14px Arial
                                                barDivision: 10, // Define the division to the Y-Axis and the default value is 5
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
                                    

                                    var data = [{'Doing The Work': 80}, {'Starting the Project': 20},{'Keeping team on track': 40}, {'Buliding High performing team': 60}];
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

                                <div class="col-md-12  text-center">
                                <span><h2>Lesson Wise</h2></span>
                                <canvas id="marksChart" width="300" height="150"></canvas>
                    </div>
                                

                    </div>
            </div>
        </div>
</div>
    <!-- <div class="h-20"></div> -->
    <!-- @if(count($lists) == 0)
        <div class="text-center">
            <img src="/assets/default/images/empty/articles.png">
            <div class="h-20"></div>
            <span class="empty-first-line">{{ trans('main.no_article') }}</span>
            <div class="h-10"></div>
            <span class="empty-second-line">
                <span>{{ trans('main.article_desc') }}</span>
            </span>
            <div class="h-20"></div>
        </div>
    @else -->
        <!-- <div class="table-responsive">
            <table class="table ucp-table" id="article-table">
                <thead class="thead-s">
                <th class="cell-ta">{{ trans('main.title') }}</th>
                <th class="text-center" width="150">{{ trans('main.category') }}</th>
                <th class="text-center" width="150">{{ trans('main.date') }}</th>
                <th class="text-center" width="150">{{ trans('main.status') }}</th>
                <th class="text-center" width="100">{{ trans('main.controls') }}</th>
                </thead>
                <tbody>
                @foreach($lists as $item)
                    <tr>
                        <td class="cell-ta">{{ $item->title }}</td>
                        <td class="text-center">
                            @if (!empty($item->category))
                                {{ $item->category->title }}
                            @endif
                        </td>
                        <td class="text-center" width="150">{{ date('d F Y | H:i',$item->created_at) }}</td>
                        <td class="text-center">
                            @if($item->mode == 'publish')
                                <b class="green-s">{{ trans('main.published') }}</b>
                            @elseif($item->mode == 'draft')
                                <b class="orange-s">{{ trans('main.draft') }}</b>
                            @elseif($item->mode == 'request')
                                <b class="blue-s">{{ trans('main.send_for_review') }}</b>
                            @elseif($item->mode == 'delete')
                                <b class="red-s">{{ trans('main.unpublish_request') }}</b>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="/user/article/edit/{{ $item->id }}" title="Edit"><span class="crticon mdi mdi-lead-pencil"></span></a>
                            <a href="/user/article/delete/{{ $item->id }}" title="Unpublish Request"><span class="crticon mdi mdi-delete-forever"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div> -->
    <!-- @endif -->
    @section('script')
    <script>
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
    </script>
    <script>
    var marksCanvas = document.getElementById("marksChart");

var marksData = {
  labels: ["Doing the work", "keeping team on the track", "Starting the project", "Building high performing team", "Keeping The Business In Mind"],
  datasets: [
    //   {
    //         label: "Last Exam %",
    //         backgroundColor: "transparent",
    //         borderColor: "rgba(74,176,181, 0.9)",
    //         fill: false,
    //         radius: 6,
    //         pointRadius: 6,
    //         pointBorderWidth: 3,
    //         pointBackgroundColor: "rgba(1,191,194, 0.9)",
    //         pointBorderColor: "rgba(1,191,194, 0.9)",
    //         pointHoverRadius: 10,
    //         data: [50, 75, 90, 75, 60]
    //     },
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
            data: [0, 0, 0, 0, 0]
        }]
};

var radarChart = new Chart(marksCanvas, {
  type: 'radar',
  data: marksData
});
    </script> 
@endsection
@endsection
