<aside>
    <nav class="">
        <ul class=" p-0 d-flex flex-column align-items-center">

            <li>

                <div class="dropdown mb-4">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-palette"></i>  Artist
                    </a>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('admin.artists.index') }}">Index</a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.artists.create') }}">Add new Artist</a></li>

                    </ul>
                  </div>

            </li>

            <li>

                <div class="dropdown mb-4">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-building-columns"></i> Museum
                    </a>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('admin.museums.index') }}">Index</a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.museums.create') }}">Add new Museum</a></li>

                    </ul>
                  </div>

            </li>

            <li>

                <div class="dropdown mb-4">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-brands fa-artstation"></i> Artworks
                    </a>

                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('admin.artworks.index') }}">Index</a></li>
                      <li><a class="dropdown-item" href="{{ route('admin.artworks.create') }}">Add new Artworks</a></li>

                    </ul>
                  </div>

            </li>
        </ul>
    </nav>
</aside>
