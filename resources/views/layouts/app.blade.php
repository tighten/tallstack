@extends('layouts.base')

@section('body')

    <header class="tw-relative tw-h-24 lg:tw-mt-0 @if(Request::is('/')){{ 'tw-translate-y-10 lg:tw-translate-y-0' }}@endif tw-bg-gray-50 tw-z-20 tw-font-['Questrial']">
        <div class="tw-mx-auto tw-max-w-7xl tw-h-full tw-flex tw-items-center tw-w-full tw-px-6 tw-lg:px-8">
            <div class="tw-relative tw-flex tw-items-center tw-justify-between tw-w-full">
                <div class="tw-flex-shrink-0">
                    <a href="/" title="Tallstack" class="tw-flex tw-rounded tw-outline-none active:tw-outline-none">
                        <svg class="tw-h-9 tw-w-auto" viewBox="0 0 680 146" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#a)"><path d="M0 46.2v31.296l18.822 11.028V58.271L0 46.199Z" fill="#0CA5E9"></path><path d="M0 46.2 81.413 0l18.075 12.071-80.666 46.2L0 46.199Z" fill="#0CA5E9"></path><path d="M18.822 88.524 45.71 73.472v31.147l27.436-15.996V57.725L99.488 42.92V12.07l-80.666 46.2v30.253Z" fill="#77C1D2"></path><path d="M26.74 84.092v39.157l19.07 11.524-.099-61.301-18.971 10.62Z" fill="#0CA5E9"></path><path d="M45.81 134.773 65.33 146v-30.502L45.71 104.619l.1 30.154Z" fill="#FF2C20"></path><path d="m65.33 146 54.275-30.8V84.302L145 69.995v-30.8L99.488 12.071v30.85l-26.34 14.804v30.898L45.71 104.62l19.619 10.879V146Z" fill="#FB70A9"></path><path d="m45.711 104.619 27.437-15.996L92.418 100 65.33 115.498 45.71 104.619Z" fill="#E24CA6"></path><path d="M73.148 57.725v30.898L92.418 100V69.2l-19.27-11.474Z" fill="#FF2C20"></path><path d="m73.148 57.725 26.34-14.804V12.07L145 39.195 92.418 69.2l-19.27-11.475Z" fill="#E24CA6"></path></g><path d="M191 43.11h49.722V53.7h-18.913v49.19h-11.896V53.7H191V43.11ZM263.555 43.11h12.923l26.787 59.78h-12.923l-4.964-11.615h-30.894l-4.964 11.615h-12.837l26.872-59.78Zm17.544 37.747L269.974 54.81l-11.126 26.047h22.251ZM310.31 43.11h11.81v48.934h30.98v10.846h-42.79V43.11ZM361.541 43.11h11.81v48.934h30.98v10.846h-42.79V43.11ZM434.338 103.915a35.3 35.3 0 0 1-13.864-2.819c-4.393-1.935-7.93-4.497-10.612-7.686l3.167-3.586c2.111 2.733 5.135 4.981 9.071 6.746 3.937 1.708 8.016 2.562 12.238 2.562 5.706 0 10.213-1.053 13.522-3.16 3.309-2.106 4.964-4.981 4.964-8.625 0-2.277-.599-4.156-1.798-5.636-1.198-1.48-3.166-2.761-5.905-3.843-2.738-1.082-6.561-2.078-11.467-2.99-5.42-.967-9.756-2.163-13.009-3.586-3.252-1.48-5.619-3.274-7.103-5.38-1.483-2.164-2.225-4.84-2.225-8.028 0-3.074.942-5.807 2.824-8.198 1.883-2.391 4.536-4.242 7.959-5.551 3.424-1.366 7.36-2.05 11.81-2.05 4.279 0 8.245.712 11.896 2.135 3.709 1.424 6.875 3.473 9.5 6.15l-2.91 3.586c-2.282-2.334-5.049-4.128-8.302-5.38-3.195-1.253-6.618-1.879-10.269-1.879-5.249 0-9.471 1.053-12.666 3.16-3.195 2.05-4.793 4.754-4.793 8.113 0 2.163.571 4.014 1.712 5.55 1.198 1.48 3.081 2.762 5.648 3.844 2.625 1.024 6.191 1.964 10.698 2.818 5.933 1.081 10.583 2.334 13.949 3.757 3.424 1.424 5.877 3.189 7.36 5.295 1.484 2.107 2.225 4.754 2.225 7.942 0 3.36-.969 6.32-2.909 8.882-1.883 2.505-4.622 4.441-8.216 5.807-3.537 1.366-7.702 2.05-12.495 2.05ZM462.868 43.11h48.011v4.868h-21.481v54.912h-5.049V47.978h-21.481V43.11ZM535.304 43.11h5.82l26.872 59.78h-5.563l-6.418-14.518h-35.602l-6.504 14.518h-5.477l26.872-59.78Zm18.571 40.48-15.661-35.185-15.661 35.184h31.322ZM602.816 104c-5.991 0-11.325-1.309-16.004-3.928-4.678-2.62-8.329-6.291-10.954-11.017-2.567-4.725-3.851-10.077-3.851-16.055s1.284-11.33 3.851-16.055c2.625-4.726 6.276-8.398 10.954-11.017C591.491 43.31 596.825 42 602.816 42c4.165 0 8.073.769 11.724 2.306 3.709 1.537 6.961 3.786 9.757 6.746l-3.509 3.245c-2.339-2.448-5.049-4.298-8.13-5.55-3.024-1.253-6.276-1.88-9.756-1.88-5.021 0-9.5 1.111-13.437 3.331-3.879 2.164-6.932 5.238-9.157 9.224-2.168 3.985-3.252 8.511-3.252 13.578s1.084 9.593 3.252 13.579c2.225 3.985 5.278 7.088 9.157 9.308 3.937 2.163 8.416 3.245 13.437 3.245 3.48 0 6.789-.626 9.927-1.879a26.59 26.59 0 0 0 8.387-5.55l3.423 3.415a29.922 29.922 0 0 1-9.927 6.576c-3.709 1.537-7.674 2.306-11.896 2.306ZM642.002 73.512v29.378h-5.134V43.11h5.134v27.157l28.499-27.157h6.932l-30.21 28.694L680 102.89h-7.103l-30.895-29.378Z" fill="#000"></path><defs><clipPath id="a"><path fill="#fff" d="M0 0h145v146H0z"></path></clipPath></defs></svg>
                    </a>
                </div>
                <div class="tw-flex lg:tw-hidden">
                    <button id="open-menu" onclick="document.getElementById('menu').classList.remove('tw-hidden'); document.getElementById('close-menu').classList.remove('tw-hidden'); this.classList.add('tw-hidden');" type="button" class="tw-text-gray-900">
                        <svg class="tw-w-7 tw-h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <button id="close-menu" onclick="document.getElementById('menu').classList.add('tw-hidden'); document.getElementById('open-menu').classList.remove('tw-hidden'); this.classList.add('tw-hidden');" type="button" class="tw-hidden tw-text-gray-900">
                        <svg class="tw-w-7 tw-h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div id="menu" class="tw-hidden tw-fixed lg:tw-absolute lg:tw-inset-y-0 lg:tw-flex lg:tw-flex-row tw-left-0 lg:tw-top-auto tw-top-0 lg:tw-translate-y-0 tw-h-auto lg:tw-h-full tw-translate-y-24 tw-z-20 tw-w-full lg:tw-w-auto tw-bg-gray-50 lg:tw-shadow-none tw-shadow-sm lg:tw-bg-transparent tw-flex-col lg:tw-items-center lg:tw-justify-center lg:tw-space-x-12 lg:tw--translate-x-1/2 lg:tw-left-1/2">
                    <a href="/" class="@if(Request::is('/')){{ 'tw-text-opacity-100' }}@else{{ 'tw-text-opacity-80 hover:tw-text-opacity-100' }}@endif tw-text-base tw-group tw-cursor-pointer tw-relative lg:tw-w-auto tw-w-full tw-flex tw-justify-center tw-items-center lg:tw-h-auto tw-h-16 lg:tw-inline-block tw-font-medium tw-text-gray-900 lg:hover:tw--rotate-3 tw-transition-all tw-duration-300 tw-rounded active:tw-ring-0 active:tw-outline-none tw-outline-none tw-px-1">
                        <span class="tw-relative tw-z-20">Home</span>
                        <span class="@if(Request::is('/')){{ 'tw-w-full' }}@else{{ 'group-hover:tw-w-full tw-w-0' }}@endif tw-z-10 tw-transition-all tw-absolute tw-ease-out tw-duration-300 tw-bg-sky-400 tw-h-2 tw-bottom-0 tw-left-0 tw-skew-x-12"></span>
                    </a>
                    <a href="/resources" class="@if(Request::is('resources')){{ 'tw-text-opacity-100' }}@else{{ 'tw-text-opacity-80 hover:tw-text-opacity-100' }}@endif tw-text-base tw-font-bold tw-group tw-cursor-pointer tw-relative lg:tw-w-auto tw-w-full tw-flex tw-justify-center tw-items-center lg:tw-h-auto tw-h-16 lg:tw-inline-block tw-font-medium tw-text-gray-900 lg:hover:tw--rotate-3 tw-transition-all tw-duration-300 tw-rounded active:tw-outline-none tw-outline-none tw-px-1">
                        <span class="tw-relative tw-z-20">Resources</span>
                        <span class="@if(Request::is('resources')){{ 'tw-w-full' }}@else{{ 'group-hover:tw-w-full tw-w-0' }}@endif  tw-z-10 tw-transition-all tw-absolute tw-ease-out tw-duration-300 tw-bg-sky-400 tw-h-2 tw-bottom-0 tw-left-0 tw-skew-x-12"></span>
                    </a>
                    <a href="/about" class="@if(Request::is('about')){{ 'tw-text-opacity-100' }}@else{{ 'tw-text-opacity-80 hover:tw-text-opacity-100' }}@endif tw-text-base tw-font-bold tw-group tw-cursor-pointer tw-relative lg:tw-w-auto tw-w-full tw-flex tw-justify-center tw-items-center lg:tw-h-auto tw-h-16 lg:tw-inline-block tw-font-medium tw-text-gray-900 lg:hover:tw--rotate-3 tw-transition-all tw-duration-300 tw-rounded active:tw-outline-none tw-outline-none tw-px-1">
                        <span class="tw-relative tw-z-20">About</span>
                        <span class="@if(Request::is('about')){{ 'w-full' }}@else{{ 'group-hover:tw-w-full tw-w-0' }}@endif tw-z-10 tw-transition-all tw-absolute tw-ease-out tw-duration-300 tw-bg-sky-400 tw-h-2 tw-bottom-0 tw-left-0 tw-skew-x-12"></span>
                    </a>
                    <a href="https://forms.reform.app/Lk3ScW/livewire-partners/vpttqp" target="_blank" class="@if(Request::is('partners')){{ 'tw-text-opacity-100' }}@else{{ 'tw-text-opacity-80 hover:tw-text-opacity-100' }}@endif tw-text-base tw-font-bold tw-group tw-cursor-pointer tw-relative lg:tw-w-auto tw-w-full tw-flex tw-justify-center tw-items-center lg:tw-h-auto tw-h-16 lg:tw-inline-block tw-font-medium tw-text-gray-900 lg:hover:tw--rotate-3 tw-transition-all tw-duration-300 tw-rounded active:tw-outline-none tw-outline-none tw-px-1">
                        <span class="tw-relative tw-z-20">Partners</span>
                        <span class="@if(Request::is('partners')){{ 'tw-w-full' }}@else{{ 'group-hover:tw-w-full tw-w-0' }}@endif tw-z-10 tw-transition-all tw-absolute tw-ease-out tw-duration-300 tw-bg-sky-400 tw-h-2 tw-bottom-0 tw-left-0 tw-skew-x-12"></span>
                    </a>
                    <a href="https://novapackages.com/" target="_blank" title="" class="tw-px-5 tw-h-16 tw-flex lg:tw-hidden tw-justify-center tw-items-center tw-text-center tw-transition-all tw-ease-out tw-duration-300 tw-text-base tw-font-semibold tw-leading-7 tw-text-white tw-duration-200 tw-bg-sky-400 focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-2 focus:tw-ring-gray-900 hover:tw-bg-sky-500 hover:tw-text-white focus:tw-bg-sky-500 focus:tw-text-white" role="button">Submit a Resource</a>
                </div>
                <div class="tw-hidden lg:tw-flex lg:tw-items-center lg:tw-justify-center">
                    <a href="https://novapackages.com/" target="_blank" title="" class="tw-px-5 tw-py-2 hover:tw--rotate-3 tw-transition-all tw-ease-out tw-duration-300 tw-text-base tw-font-semibold tw-leading-7 tw-text-gray-900 tw-duration-200 tw-bg-transparent tw-border tw-border-gray-200 tw-rounded-md focus:tw-outline-none focus:tw-ring-2 focus:tw-ring-offset-2 focus:tw-ring-sky-500 hover:tw-bg-sky-500 hover:tw-text-white sm:tw-w-auto hover:tw-scale-[1.01] focus:tw-bg-sky-500 focus:tw-text-white" role="button">Submit a Resource</a>
                </div>
            </div>
        </div>
    </header>

    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset


    <footer class="tw-h-auto md:tw-py-32 tw-py-20 2xl:tw-px-0 tw-px-10 tw-border-t tw-border-gray-100 tw-bg-gray-50 tw-font-['Questrial']">
        <div class="tw-max-w-7xl tw-mx-auto tw-px-6 lg:tw-px-8 tw-flex md:tw-flex-row md:tw-space-y-0 tw-space-y-20 tw-flex-col tw-flex-wrap xl:tw-space-x-5 xl:tw-flex-nowrap tw-items-start tw-justify-between">
            <div class="tw-w-full md:tw-w-1/2 lg:tw-w-1/3 tw-flex-shrink-0 tw-space-y-5 tw-pr-10">
                <h4 class="tw-text-4xl">TALL stack.</h4>
                <p class="tw-text-gray-500">This page and project is available via OpenSource. Check out the github repo below.</p>
                <a href="https://github.com/livewire/tallstack.dev" class="tw-block tw-underline">View the Github Repo</a>
            </div>
            <div class="tw-w-full md:tw-w-1/4 tw-pt-2">
                <h4 class="tw-text-2xl tw-mb-5">The Stack</h4>
                <ul class="tw-relative tw-text-gray-500 tw-space-y-2">
                    <li><a href="https://tailwindcss.com" target="_blank" class="hover:tw-underline">TailwindCSS</a></li>
                    <li><a href="https://alpinejs.dev" target="_blank" class="hover:tw-underline">Alpine.js</a></li>
                    <li><a href="https://laravel.com" target="_blank" class="hover:tw-underline">Laravel</a></li>
                    <li><a href="https://laravel-livewire.com" target="_blank" class="hover:tw-underline">Livewire</a></li>
                </ul>
            </div>
            <div class="tw-w-full md:tw-w-1/4 lg:tw-w-1/4 tw-pt-2">
                <h4 class="tw-text-2xl tw-mb-5">Resources</h4>
                <ul class="tw-relative tw-text-gray-500 tw-space-y-2">
                    <li><a href="#_" class="hover:tw-underline">Laracasts</a></li>
                    <li><a href="#_" class="hover:tw-underline">Tigten</a></li>
                    <li><a href="#_" class="hover:tw-underline">Tails</a></li>
                    <li><a href="#_" class="hover:tw-underline">Filament</a></li>
                </ul>
            </div>
            <div class="tw-w-full md:tw-w-2/3 lg:tw-w-1/3 tw-pt-2">
                <h4 class="tw-text-2xl tw-mb-5">Credits</h4>
                <p class="tw-text-gray-500">Design crafted by <a href="https://twitter.com/tnylea" target="_blank" class="hover:underline text-sky-400 font-medium">@tnylea</a> and <a href="https://twitter.com/stauffermatt" target="_blank" class="hover:underline text-sky-400 font-medium">@stauffermatt</a>. Hosted and Managed by the fine folks <a href="https://twitter.com/TightenCo" target="_blank" class="hover:underline text-sky-400 font-medium">@TightenCo</a> 🍻</p>
            </div>
        </div>
    </footer>

@endsection
