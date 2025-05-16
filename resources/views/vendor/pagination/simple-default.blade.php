@if ($paginator->hasPages())
    <nav>
        <ul class="pagination flex space-x-2">
            {{-- Tombol Sebelumnya --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true">
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded">Sebelumnya</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                        Sebelumnya
                    </a>
                </li>
            @endif

            {{-- Tombol Selanjutnya --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                        Selanjutnya
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true">
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded">Selanjutnya</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
