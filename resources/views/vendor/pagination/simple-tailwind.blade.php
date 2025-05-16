@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Navigasi Paginasi" class="flex justify-between">
        {{-- Tombol Sebelumnya --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-300 bg-white border border-blue-200 cursor-default leading-5 rounded-md">
                &laquo; Sebelumnya
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-300 leading-5 rounded-md hover:text-blue-500 focus:outline-none focus:ring ring-blue-200 focus:border-blue-400 active:bg-blue-50 active:text-blue-600 transition ease-in-out duration-150">
                &laquo; Sebelumnya
            </a>
        @endif

        {{-- Tombol Selanjutnya --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-600 bg-white border border-blue-300 leading-5 rounded-md hover:text-blue-500 focus:outline-none focus:ring ring-blue-200 focus:border-blue-400 active:bg-blue-50 active:text-blue-600 transition ease-in-out duration-150">
                Selanjutnya &raquo;
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-blue-300 bg-white border border-blue-200 cursor-default leading-5 rounded-md">
                Selanjutnya &raquo;
            </span>
        @endif
    </nav>
@endif
