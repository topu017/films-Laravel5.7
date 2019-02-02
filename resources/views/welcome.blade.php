@include('templates.header')
    <div class="container_fluid">
        <div class="row text-center index_container">
            <div class="row text-center text-lg-left index_container_content">
                @foreach($films as $film)
                    <div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
                        <a href="#">
                            <img class="card-img-top index_image" src="{{ Storage::url($film->image) }}" alt="">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="#">{{ $film->name }}</a>
                            </h2>
                            <h4>On {{ $film->release_date }} in <strong>{{ $film->country }}</strong></h4>
                            <h5><strong>Genre: {{ $film->genre }}</strong>, Ticket Price: ${{ $film->ticket_price }}</h5>
                            <p class="card-text">{{ Str::words($film->description, 20,'....')  }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('showFilm', ['slug' => $film->slug]) }}" class="btn btn-info">View Details!</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <nav aria-label="Page navigation" class="pull-right">
            {{ $films->links() }}
        </nav>
    </div>
@include('templates.footer')
