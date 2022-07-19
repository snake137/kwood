<x-header :categories="$categories"></x-header>
<main>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($posts as $post)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="post-img" src="{{ asset('images/1.jpg') }}" />

                            <div class="card-body">
                                <p class="card-text">{{ $post->name }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/" type="button" class="btn btn-sm btn-outline-secondary">Читать полностью</a>
                                    </div>
                                    <small class="text-muted">Просмотров {{ $post->views }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
<x-footer></x-footer>
