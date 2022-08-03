<nav class="navbar position-sticky">
    <div class="d-flex justify-content-between align-items-center">
        <a class="navbar-brand pe-auto" href="/sounds">
          <strong>SOUNDS</strong>
        </a>
        <input type="checkbox" name="" id="" />
        <ul class="nav d-flex menu">
            @if ($id == "programs")
                <li class="nav-item">
                    <a class="nav-link pe-auto" href="/sounds/top-shows">
                        <i class="icon-nav icofont-star"></i>
                        <span>Top Shows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-auto active" href="/sounds/programs">
                        <i class="icon-nav icofont-folder-open"></i>
                        <span>Programs</span>
                    </a>
                </li>
            @elseif($id=="top-shows")
                <li class="nav-item">
                    <a class="nav-link pe-auto active" href="/sounds/top-shows">
                        <i class="icon-nav icofont-star"></i>
                        <span>Top Shows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-auto" href="/sounds/programs">
                        <i class="icon-nav icofont-folder-open"></i>
                        <span>Programs</span>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link pe-auto" href="/sounds/top-shows">
                        <i class="icon-nav icofont-star"></i>
                        <span>Top Shows</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pe-auto" href="/sounds/programs">
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
