<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed {{ (request()->is('products')) ? 'active' : '' }}"
                data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box2"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('products') }}">
                        <i class="bi bi-circle"></i><span>Products Table</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('products.create') }}">
                        <i class="bi bi-circle"></i><span>Add Products</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed {{
                (Request::routeIs('sections') || Request::routeIs('sections.create')) ? 'active' : '' }}"
                data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Sections</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('sections') }}">
                        <i class="bi bi-circle"></i><span>Section Table</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sections.create') }}">
                        <i class="bi bi-circle"></i><span>Add Section</span>
                    </a>
                </li>

            </ul>
        </li>



        <li class="nav-item">
            <a class="nav-link collapsed {{
                (Request::routeIs('categories') || Request::routeIs('categories.create') || Request::routeIs('categories.update')) ? 'active' : '' }}"
                data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Categories</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('categories') }}">
                        <i class="bi bi-circle"></i><span>Categories Table</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.create') }}">
                        <i class="bi bi-circle"></i><span>Add Categories</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed {{
                (Request::routeIs('subCategories') || Request::routeIs('subCategories.create') || Request::routeIs('subCategories.update')) ? 'active' : '' }}" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Sub Categories</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('subCategories') }}">
                        <i class="bi bi-circle"></i><span>SubCategories Table</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('subCategories.create') }}">
                        <i class="bi bi-circle"></i><span>Add SubCategories</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ (Request::routeIs('editors') || Request::routeIs('editors.create') || Request::routeIs('editors.update')) ? 'active' : '' }}" data-bs-target="#icons-nav"
                data-bs-toggle="collapse" href="#">
                <i class="bi bi-person"></i></i><span>Editors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('editors') }}">
                        <i class="bi bi-circle"></i><span>Editors Table</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('editors.create') }}">
                        <i class="bi bi-circle"></i><span>Add Editors</span>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed {{ (Request::routeIs('orders') || Request::routeIs('orders.update') || Request::routeIs('orders.pdf')) ? 'active' : '' }}" href="{{ route('orders') }}">
                <i class="bi bi-list-ol"></i>
                <span>Orders</span>
            </a>
        </li><!-- End Error 404 Page Nav -->
        <!-- End Icons Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed {{ (Request::routeIs('contacts') || Request::routeIs('contacts.reply')) ? 'active' : '' }}"
                href="{{ route('contacts') }}">
                <i class="bi bi-envelope-at"></i>
                <span>Contacts</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed {{ (request()->is('users')) ? 'active' : '' }}" href="{{ route('users') }}">
                <i class="bi bi-people-fill"></i>
                <span>Users</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed {{ (request()->is('settings')) ? 'active' : '' }}"
                href="{{ route('settings') }}">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li><!-- End Error 404 Page Nav -->


    </ul>
</aside>