<div>
    <div class="w-screen min-h-screen flex flex-col pt-5 items-center justify-center bg-gray-50">
        <a href="/" class="flex items-center space-x-1.5 text-xs font-medium group mb-5  text-gray-700 hover:text-gray-800">
            <svg class="w-4 h-4 group-hover:-translate-x-1 transition-all ease-out" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
            <span>Return Back</span>
        </a>
        <div class="min-h-[400px] w-full max-w-lg mx-auto rounded-2xl bg-white p-10 shadow-sm border border-gray-100">
            <h1 class="text-3xl mb-6 font-semibold">Submit Resource</h1>
            <p class="text-sm text-gray-600 mb-6">Include the title and the URL of the resource. If we decide that this will be a good resource to include in the page we'll add the resource within a weeks time. Please leave a detailed description of the resource so that we can better understand why this would be a good resource to include.</p>
            <form wire:submit.prevent="create">
                {{ $this->form }}

                <div class="relative inline-flex mt-10 group w-full">
                    <div class="absolute transitiona-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-sky-400 via-blue-400 to-teal-400 rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt"></div>
                    <button type="submit" class="relative w-full hover:-rotate-3 transition-all ease-out duration-300 inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white duration-200 bg-gray-900 hover:bg-sky-500 hover:scale-[1.01] rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500" role="button">Submit Resource</button>
                </div>
            </form>
        </div>
    </div>
    @livewire('notifications')
</div>
