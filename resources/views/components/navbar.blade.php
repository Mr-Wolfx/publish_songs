<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: linear-gradient(rgb(0, 0, 0), rgb(0, 215, 54));">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">SpotiHack</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                <a class="nav-link" href="{{route('song.index')}}">Canzoni</a>
                <a class="nav-link" href="{{route('song.create')}}">Inserisci Canzone</a>
            </div>
        </div>
    </div>
</nav>
