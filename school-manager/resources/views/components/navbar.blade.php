<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">SMKN 4 Bandung</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $nav == 'siswa' ? 'fw-bold text-primary' : '' }}" href="/siswa">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $nav == 'kelas' ? 'fw-bold text-primary' : '' }}" href="/kelas">Kelas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
