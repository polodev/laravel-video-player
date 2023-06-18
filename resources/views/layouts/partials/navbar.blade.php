<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="{{ config('global.container_class') }}">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel Video Player') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a href='{{ route('series.index') }}' class='nav-link'>Series</a>
        </li>
        <li class="nav-item">
            <a href='{{ route('series.create') }}' class='nav-link'>Create series</a>
        </li>
        <li class="nav-item">
            <a href='{{ route('topic.index') }}' class='nav-link'>Topics</a>
        </li>
        <li class="nav-item">
            <a href='{{ route('topic.create') }}' class='nav-link'>Create Topic</a>
        </li>
      </ul>
      <form action="{{ route('series.index') }}" class="d-flex">
        <input value="{{ isset($query) ? $query : ''}}" class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
