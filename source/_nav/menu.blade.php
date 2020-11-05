<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
       class="ml-6 text-white hover:text-gray-400 {{ $page->isActive('/blog') ? 'active text-gray-600' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/projects"
       class="ml-6 text-white hover:text-gray-400 {{ $page->isActive('/projects') ? 'active text-gray-600' : '' }}">
        Projects
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
       class="ml-6 text-white hover:text-gray-400 {{ $page->isActive('/contact') ? 'active text-gray-600' : '' }}">
        Contact
    </a>
</nav>
