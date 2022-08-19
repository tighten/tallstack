@extends('layouts.app')

@section('content')

<div class="tw-w-full tw-py-10 lg:tw-py-24 tw-font-['Questrial']">
    <div class="tw-max-w-5xl lg:tw-px-0 tw-px-6 tw-mx-auto">

        <h1 target="_blank" class="tw-text-3xl sm:tw-text-4xl lg:tw-text-5xl tw-font-semibold tw-mb-5 lg:tw-mb-12 tw-group tw-cursor-pointer tw-relative tw-w-auto tw-justify-center tw-items-center lg:tw-h-auto lg:tw-h-12 tw-inline-block tw-font-medium tw-text-gray-900 lg:tw--rotate-3 tw-transition-all tw-duration-300 tw-rounded active:tw-outline-none tw-outline-none lg:tw--ml-3 tw-text-opacity-100 tw-px-1">
            <span class="tw-relative tw-z-20">Resources</span>
            <span class="tw-w-full tw-z-10 lg:tw-block tw-hidden tw-transition-all tw-absolute tw-ease-out tw-duration-300 tw-bg-sky-400 tw-h-3 tw-bottom-0 tw-left-0 tw-skew-x-12"></span>
        </h1>

        @foreach(App\Models\Resource::all() as $resource)
            <div class="tw-flex tw-flex-col tw-items-center md:tw-flex-row @if(!$loop->last){{ 'tw-border-b' }}@endif tw-border-gray-200 md:tw-pb-10 tw-mb-10">
                <div class="tw-w-full md:tw-w-1/2 tw-aspect-video">
                    <a href="#_" class="tw-block lg:hover:tw--rotate-3 tw-transition-all tw-ease-out tw-duration-300">
                        <img class="tw-object-cover tw-w-full tw-h-full tw-rounded-lg tw-border-4tw- border-gray-100 tw-aspect-video" src="{{ $resource->image }}">
                    </a>
                </div>
                <div class="tw-flex tw-flex-col tw-items-start tw-justify-center tw-w-full tw-h-full tw-py-6 tw-mb-6 md:tw-mb-0 md:tw-w-1/2">
                    <div class="tw-flex tw-flex-col tw-items-start tw-justify-center tw-h-full tw-space-y-3 tw-transform md:tw-pl-10 lg:tw-pl-16 md:tw-space-y-5">
                        <div class="tw-bg-sky-400 tw-flex tw-items-center tw-pl-2 tw-pr-3 tw-py-1.5 tw-leading-none tw-rounded-md tw-text-xs tw-font-medium tw-uppercase tw-text-white tw-inline-block">
                            <svg class="tw-w-3.5 tw-h-3.5 tw-mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"></path></svg>
                            <span>Packages</span>
                        </div>
                        <h2 class="tw-text-2xl sm:tw-text-3xl lg:tw-text-4xl tw-font-bold tw-leading-none"><a href="#_" class="">{{ $resource->title }}</a></h2>
                        <p class="tw-pt-2 tw-text-lg tw-text-gray-600 tw-font-medium">{{ $resource->description }}</p>
                        <a href="#_" class="tw-mr-1 tw-underline">View Package</a>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
</div>

{{-- @tails('tallstack.resources') --}}

@endsection