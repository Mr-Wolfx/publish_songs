<x-layout>

    <div class="container">
        <div class="row">
            @foreach ($songs as $song)
                <div class="col-12 col-md-4 mt-5">

                    <div class="card" style="width: 18rem;" >
                        <img src="/img/gatto.jpg" class="card-img-top" alt="...">
                        <div class="card-body" style="background: linear-gradient(to top, rgb(0, 0, 0), rgb(0, 215, 54));">
                            <h5 class="card-title">Nome: {{ $song->songName }}</h5>
                            <h6 class="card-text">Artists: {{ $song->artist }}</h6>
                            <p class="card-text">Durata: {{ $song->duration }}</p>
                            <p class="card-text">Anno: {{ $song->year }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>



                </div>
            @endforeach
        </div>
    </div>

</x-layout>
