<!-- _comment_replies.blade.php -->

 @foreach($comments as $comment)
 @php
    $pid = $comment->parent_id;
 @endphp
    <div class="display-comment">

        <strong>{{ $comment->user->alias }}</strong>
        <p>{{ $comment->body }}</p>
        @if( $pid == null )
            <!-- <form method="post" action="{{ route('reply.add') }}">
                @csrf
                <div class="form-group">
                    <text-area type="text" name="comment_body" class="form-control"></text-area>
                    <input type="hidden" name="post_id" value="{{ $post_id }}" />
                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-sm" value="Reply" />
                </div>
            </form> -->
        @endif
    </div>
@endforeach