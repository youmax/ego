{!! view_render_event('bagisto.shop.layout.header.locale.before') !!}

<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <button @click='open=!open'
        class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
        <span>{{ core()->getCurrentLocale()->name }}</span>
        @if (count(core()->getCurrentChannel()->locales) > 1)
        <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        @endif
    </button>
    @if (count(core()->getCurrentChannel()->locales) > 1)
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
        <div class="px-2 py-2 text-gray-700 rounded-md shadow dark-mode:bg-gray-800 bg-white">
            <svg class="block fill-current text-white w-4 h-4 absolute right-0 top-0 mr-4 -mt-3 z-0"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                </path>
            </svg>
            @foreach (core()->getCurrentChannel()->locales as $locale)
            @if (isset($serachQuery))
            <a href="?{{ $serachQuery }}&locale={{ $locale->code }}"
                class="btn btn-nav
                {{ $locale->code == app()->getLocale() ? 'active' : '' }}">
                {{ $locale->name }}
            </a>
            @else
            <a href="?locale={{ $locale->code }}"
                class="btn btn-nav
                {{ $locale->code == app()->getLocale() ? 'active' : '' }}">
                {{ $locale->name }}
            </a>
            @endif
            @endforeach            
        </div>
    </div>
    @endif
</div>


    {{-- <select class="btn btn-link dropdown-toggle control locale-switcher styled-select"
        onchange="window.location.href = this.value" @if (count(core()->getCurrentChannel()->locales) == 1)
        disabled="disabled"
        @endif>
    </select> --}}
{!! view_render_event('bagisto.shop.layout.header.locale.after') !!}

{!! view_render_event('bagisto.shop.layout.header.currency-item.before') !!}

{{-- @if (core()->getCurrentChannel()->currencies->count() > 1)
        <div class="pull-left">
            <div class="dropdown">
               <select
                    class="btn btn-link dropdown-toggle control locale-switcher styled-select"
                    onchange="window.location.href = this.value">
                    @foreach (core()->getCurrentChannel()->currencies as $currency)
                        @if (isset($serachQuery))
                            <option value="?{{ $serachQuery }}&currency={{ $currency->code }}"
{{ $currency->code == core()->getCurrentCurrencyCode() ? 'selected' : '' }}>{{ $currency->code }}</option>
@else
<option value="?currency={{ $currency->code }}"
    {{ $currency->code == core()->getCurrentCurrencyCode() ? 'selected' : '' }}>{{ $currency->code }}</option>
@endif
@endforeach

</select>

<div class="select-icon-container">
    <span class="select-icon rango-arrow-down"></span>
</div>
</div>
</div>
@endif --}}

{!! view_render_event('bagisto.shop.layout.header.currency-item.after') !!}