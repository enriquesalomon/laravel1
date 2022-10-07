<nav x-data="{ open: false }" class="bg-gray-800 fixed text-white w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-norwap">
              {{$data['title']}}
            </span>
        </a>
        <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">           
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>


        <div x-show="open" class="w-full md:block md:w-auto" id="navbar-main">
            <x-items />
           
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-main">
            <x-items />
           
        </div>

    </div>

 
</nav>