@if ($paginator->hasPages())
    <div class="blog-pagination">
        <ul class="justify-content-center">

                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <a href=""  aria-hidden="true">&lsaquo;</a>
                        </li>
                    @else
                        <li><a  href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class= disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active" aria-current="page">

                                    <a  href="">{{ $page }}</a></li>
                                @else
                                    <li ><a  href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a  href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span  aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif

        </ul>
    </div>
@endif
