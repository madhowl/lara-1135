<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.index')}}">
                <i class="bi bi-grid"></i>
                <span>Панель управления</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.post.index')}}">
                <i class="bi bi-journal-text"></i><span>Статьи</span>
            </a>
        </li><!-- End Articles Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.category.index')}}">
                <i class="bi bi-journal-text"></i><span>Категории</span>
            </a>
        </li><!-- End Articles Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('admin.tag.index')}}">
                <i class="bi bi-journal-text"></i><span>Тэги</span>
            </a>
        </li><!-- End Articles Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/admin/users">
                <i class="bi bi-person-square"></i><span>Пользователи</span>
            </a>
        </li><!-- End Articles Nav -->

    </ul>

</aside><!-- End Sidebar-->
