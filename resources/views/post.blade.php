<x-header :categories="$categories"></x-header>
<main>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach($post as $data)
                    <h3 class="pb-4 mb-4 font-italic border-bottom">
                        {{ $data->name }}
                    </h3>

                    <div class="blog-post">
                       {{ $data->text }}
                    </div>
                    @endforeach
                </div>

                <aside class="col-md-4">
                    <div class="p-4">
                        <h4 class="font-italic">Архивы</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">Март 2014</a></li>
                            <li><a href="#">Февраль 2014</a></li>
                            <li><a href="#">Январь 2014</a></li>
                            <li><a href="#">Декабрь 2013</a></li>
                            <li><a href="#">Ноябрь 2013</a></li>
                            <li><a href="#">Октябрь 2013</a></li>
                            <li><a href="#">Сентябрь 2013</a></li>
                            <li><a href="#">Август 2013</a></li>
                            <li><a href="#">Июль 2013</a></li>
                            <li><a href="#">Июнь 2013</a></li>
                            <li><a href="#">Май 2013</a></li>
                            <li><a href="#">Апрель 2013</a></li>
                        </ol>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</main>
<x-footer></x-footer>
