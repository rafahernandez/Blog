<nav id="js-nav-menu" class="nav-menu hidden lg:hidden text-white">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="nav-menu__item hover:text-gray-400 {{ $page->isActive('/blog') ? 'active text-gray-600' : '' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/projects"
                class="nav-menu__item hover:text-gray-400 {{ $page->isActive('/projects') ? 'active text-gray-600' : '' }}"
            >Projects</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="/contact"
                class="nav-menu__item hover:text-gray-400 {{ $page->isActive('/contact') ? 'active text-gray-600' : '' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
