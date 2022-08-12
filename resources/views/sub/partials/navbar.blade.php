<nav class="navbar position-sticky">
    <div class="d-flex justify-content-between align-items-center">
        <a class="navbar-brand pe-auto" href="/sounds">
          Sounds
        </a>
        <input type="checkbox" name="" id="" />
        <ul class="nav d-flex menu">
            @if ($id == "programs")
                <li class="nav-item">
                    <a class="nav-link" href="/sounds/top-shows">
                        <i class="icon-nav icofont-star"></i>
                        <span>Top Shows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/sounds/programs">
                        <i class="icon-nav icofont-folder-open"></i>
                        <span>Programs</span>
                    </a>
                </li>
            @elseif($id=="top-shows")
                <li class="nav-item">
                    <a class="nav-link active" href="/sounds/top-shows">
                        <i class="icon-nav icofont-star"></i>
                        <span>Top Shows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sounds/programs">
                        <i class="icon-nav icofont-folder-open"></i>
                        <span>Programs</span>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/sounds/top-shows">
                        <i class="icon-nav icofont-star"></i>
                        <span>Top Shows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sounds/programs">
                        <i class="icon-nav icofont-folder-open"></i>
                        <span>Programs</span>
                    </a>
                </li>
            @endif

        </ul>

        <div class="nav-item hamburger-lines">
          <span class="line line1"></span>
          <span class="line line2"></span>
          <span class="line line3"></span>
        </div>
    </div>
</nav>
