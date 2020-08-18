  
@extends('layouts.layout')

<style>
      .img-div{
        /* background: blue; */
        background-repeat: no-repeat;
        background-size: contain;
        background-position: 50% 50%;
        border-radius: 50%;
        width: 80px;
        height: 80px;
    }

    .display-comment .display-comment {
        /* margin-left: 20px; */
    }
  </style>
 
@section('content')
   <!-- content-wrapper -->
    <div class="container py-4">
        <!-- row -->
        <div class="row">
            <!-- main section -->
            <div class="col-8">
                <div class="heading">
                    <h4 class="text-heading">{{ $post->crime }}</h4>
                    <div class="row text-grey">
                        <div class="col-6 block-div">
                            <p>Updated on January 7, 2016  </p>
                            <p class="tag">ongoing</p>
                        </div>
                         <div class="col block-div"> 
                            <p><i class="fa fa-user"></i> by <a href="#"><strong>{{ $post->user->alias }}</strong></a> </p>
                        </div>
                    </div>
                </div>    
                <hr>
                <div class="full">
                    <p>
                        {{ $post->description }}
                    </p>
                </div>
                
                <div class="comments py-3">
                    <h6 class="text-heading mb-0">Comments</h6>
                    <ul class="comments-list">
                     <!-- @if(isset($post->comments))   
                         @foreach($post->comments as $comment)
                        <li>
                            <div class="row">
                                <div class="col-1">
                                    <div class="img-div" style="background: url('../img/2.jpg')"></div>
                                </div>
                                <div class="col pt-1 pl-5">
                                    <p><strong>{{ $comment->user->name }}:</strong> &nbsp {{ $comment->body }}</p>
                                    <div class="row text-grey">
                                        <div class="col-12 pull-right">
                                            <p>Fri Mar 29, 11:23 2016</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <hr>
                         @endforeach
                     @endif    
                    </ul> -->

                   
                     
                     @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])    

                    @if(isset(Auth::user()->name))  
                    <h6 style="font-size: 97%">Add comment</h6>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="comment_body" class="form-control" />
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success btn-sm " value="Add Comment" />
                        </div>
                    </form>
                    @endif
                    
                </div>
            </div>
            <!-- /main section -->
            <div class="col">
                <div class="pt-5">
                    <div class="related mt-5">
                        <h6 class="m-0 mb-1 text-heading"><strong>Related Topics</strong></h6>
                        <hr class="m-0">
                        <ol class="m-0 mt-2">
                             @foreach($related_posts as $post)
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

                   <div class="hot mt-5"> 
                    <h6 class="m-0 mb-1  text-heading"><strong>Hot Topics</strong></h6>
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
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /content-wrapper -->
@endsection