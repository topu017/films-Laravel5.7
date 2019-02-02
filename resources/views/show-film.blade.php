@include('templates.header')
<div class="container_fluid_show">
    <div class="show_container">
        <div class="show_container_content_top">
            <div class="media">
                <img class="mr-3 show_image" src="{{ Storage::url($film->image) }}" alt="">
                <div class="media-body">
                    <h2 class="">
                        <a href="#">{{ $film->name }}</a>
                    </h2>
                    <h4>On {{ $film->release_date }} in <strong>{{ $film->country }}</strong></h4>
                    <h5><strong>Genre: {{ $film->genre }}</strong>, Ticket Price:{{ $film->ticket_price }}</h5>
                    <p class="">{{ $film->description  }}</p>
                </div>
            </div>
            <a class="btn btn-outline-primary pull-right" href="{{ route('index') }}">Back</a>
        </div>
        <div class="show_container_content_bottom">
            <div class="show_container_content_bottom_comments">
                <h1>Comments</h1>
                @foreach($comments as $comment)
                <div class="alert alert-primary" role="alert">
                    <strong>"{{ $comment->comment }}", By {{ $comment->name }}<small>({{ $comment->email }})</small></strong>
                </div>
                @endforeach
                    <nav aria-label="Page navigation" class="pull-right">
                        {{ $comments->links() }}
                    </nav>
            </div>
            <hr>
            <div class="show_container_content_bottom_form">
                <h1>Add A Comment</h1>
                <form name="film_create_form" action="{{ route('storeComment') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea name="comment" type="text" class="form-control" id="comment" placeholder="Comment" required></textarea>
                    </div>
                    <input name="slug" type="hidden" class="form-control" id="slug" value="{{ $film->slug }}">
                    <button name="submit" type="submit" class="btn btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('templates.footer')
