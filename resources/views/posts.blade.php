  
@extends('layouts.layout')

<style>
      .img-div{
        /* background: blue; */
        background-repeat: no-repeat;
        background-size: contain;
        /* background-position: 50% 50%; */
        border-radius: 50%;
        width: 90px;
        height: 90px;
    }
  </style>
  
  <!-- chart js -->
<script src="{{ asset('js/Chart.min.js') }}"></script>


@section('search')
    <div class="input-group col-md-12">
        <form action="{{ route('allposts.index') }}" method="get">                    
            <input type="text" class="p-2 search-query form-control" name="search" value="{{ isset($query) ? $query : '' }}" placeholder="Search" />
            <span class="input-group-btn">
                <button class="btn btn-warning" type="submit">
                    <span class=" fa fa-search"></span>
                </button>
            </span>
        </form>
    </div>  
 @endsection

@section('content')
    <div class="container content-wrapper">
          @if (\Session::has('success'))
        <div class="alert alert-success" id="success-alert">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif

        <!-- row -->
        <div class="row">
            <!-- main section -->
            <div class="col-8">
                <div class="posts-feed">
                <!-- breadcrumb -->
                {{ Breadcrumbs::render('blog') }}
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <a href="{{ route('filter', ['all' , 'allposts']) }}"><li class="breadcrumb-item active" aria-current="page"><h4>All posts</h4></li></a>
                        </ol>
                    </nav> -->
                    <!-- /breadcrumb -->
                    
                    <ul>
                      @if(isset($posts))

                         @foreach($posts as $post)

                         @php
                            $phpdate = strtotime( $post->updated_at );
                            $mysqldate = date( "m/d/y g:i A", $phpdate );
                         @endphp
                        <li>
                            <div class="row">
                                <div class="col-2 pr-0">
                                    <div class="img-div" style="background: url('{{ asset('svg/women_dp_90.svg') }}')"></div>
                                </div>
                                <div class="col pt-3 pl-0">
                                    <a href="{{action('PostsController@show', $post->id)}}"> <h6>{{ $post->crime }}</h6></a>
                                    <div class="row text-grey">
                                        <div class="col-6 block-div">
                                         <p>Updated on {{ $mysqldate }}</p>
                                         <a href="{{ route('filter', ['status' , $post->status ]) }}"><p class="tag">{{ $post->status }}</p></a>
                                        </div>
                                        <div class="col block-div"> 
                                            <p><i class="fa fa-user"></i> by <a href="#"><strong>{{ $post->user->alias }}</strong></a> </p>
                                            <p><i class="fa fa-comment"></i> {{ $post->comments->count() }}</p>
                                            <!-- <p><i class="fa fa-heart"></i> 9 </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <hr>
                        @endforeach
                     {{ $posts->render() }}
                     {{ isset($query) ?  $posts->appends(['query' => $query])->links() : '' }}                   
                     @else  
                     <div class="text-center textmuted">
                            <h5 class="text-heading">No Posts</h5>
                        </div>
                     @endif
                    </ul>
                </div>    
            </div>
            <!-- /main section -->
            <div class="col">
                <div class="pt-5">
                   <div class="categories"> 
                    <h6 class="m-0 mb-1 text-heading"><strong>Tips</strong></h6>
                    <hr class="m-0">
                    <!--<ul class="m-0 mt-2">
                        <a href="{{ route('filter', ['context', 'racial']) }}"><li>Racial</li></a>
                        <a href="{{ route('filter', ['context' , 'personal']) }}"><li>Personal</li></a>
                        <a href="{{ route('filter', ['context' , 'sexist']) }}"><li>Sexist</li></a>
                        <a href="{{ route('filter', ['context' , 'social']) }}"><li>Social</li></a>
                        <a href="{{ route('filter', ['context' , 'political']) }}"><li>Political</li></a>
                        <a href="{{ route('filter', ['physical' , 'yes']) }}"><li>Physical Abuse</li></a>
                    </ul>-->
                   </div> 

                   <div class="hot mt-5"> 
                    <h6 class="m-0 mb-1 text-heading"><strong>Hot Topics</strong></h6>
                    <hr class="m-0">
                    <ol class="m-0 mt-2">
                        @foreach($top_posts as $post)
                        <a href="{{action('PostsController@show', $post->id)}}"> <li>
                            <div class="row p-1">
                                <div class="col">
                                    {{ $post->crime }} 
                                </div>
                                <div class="col">
                                    <div class="div-circle bg-3">
                                        {{ $post->visit_count }}
                                    </div>
                                </div>
                            </div>
                            
                        </li></a>
                        @endforeach
                    </ol>
                   </div>

                   <div class="hot mt-5 pb-4"> 
                    <h6 class="m-0 mb-1 text-heading"><strong>Stats</strong></h6>
                    <hr class="m-0">
                    <canvas id="stats" style="height: 200px; width: 100%"></canvas>
                        <script>
                        var data = [{
                                    label: '# of Votes',
                                            data: [{{ $lawyers_count->count() }}, {{ $doctors_count->count() }}, {{ $teachers_count->count() }}, {{ $engineers_count->count() }}, 
                                                        {{ $nurse_count->count() }}, {{ $civil_servant_count->count() }}, {{ $business_count->count() }}
                                                    ],
                                            backgroundColor: [
                                                '#f98866',
                                                '#ff420e',
                                                '#80bd9e',
                                                '#89da59',
                                                '#90afc5',
                                                '#336b85',
                                                '#505160',
                                                '#2a3132',
                                                '#763626'
                                            ],
                                            borderColor: [
                                                '#f98866',
                                                '#ff420e',
                                                '#80bd9e',
                                                '#89da59',
                                                '#90afc5',
                                                '#336b85',
                                                '#505160',
                                                '#2a3132',
                                                '#763626'
                                            ],
                                            borderWidth: 1
                                         }]


                        // chart
                        var ctx = document.getElementById("stats").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: ["Lawyers", "Doctors", "Teachers", "Engineers", "Nurses", "Civil Servant", "Business Owner"],
                                datasets:  data
                            },
                            options: {
                             tooltips: {
                                  enabled: false
                                  },

                             plugins: {
                                datalabels: {
                                    formatter: (value, ctx) => {

                                    let sum = 0;
                                    let dataArr = ctx.chart.data.datasets[0].data;
                                    dataArr.map(data => {
                                        sum += data;
                                    });
                                    let percentage = (value*100 / sum).toFixed(2)+"%";
                                    return percentage;


                                    },
                                    color: '#fff',
                                        }
                                }

                            }
                        });
                        </script>
                    <!-- <ul class="m-0 mt-2">
                       <li>Lawyers <span class="pull-right">{{ $lawyers_count->count() }}</span></li>
                       <li>Doctors <span class="pull-right">{{  $doctors_count->count() }}</span></li>
                       <li>Engineers <span class="pull-right">{{ $engineers_count->count() }}</span></li>
                       <li>Teachers <span class="pull-right">{{ $teachers_count->count() }}</span></li>
                    </ul> -->
                   </div>
                   
                    
                </div>
            </div>
        </div>
        <!-- /row -->

        
    </div>
@endsection

