@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <a class="page-link" href=""  aria-hidden="true">&lsaquo;</a>
                        </li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class= "page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active page-item" aria-current="page">

                                    <a class="page-link" href="">{{ $page }}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span  aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif

        </ul>
    </nav><!-- End Basic Pagination -->
@endif
