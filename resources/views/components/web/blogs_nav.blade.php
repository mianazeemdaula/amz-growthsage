<div class="sidebarWrapper space-y-[30px]">
    <div class="wdiget widget_search">
        <div class="bg-[#F8F8F8] flex  rounded-md shadow-e1 items-center  py-[4px] pl-3  relative">
            <div class="flex-1">
                <input type="text" placeholder="Search keyword..." class="border-none focus:ring-0 bg-transparent">
            </div>
            <div class="flex-none">
                <button class="btn btn-primary">
                    <img src="{{asset('images/icon/search.svg')}}" alt=""></button>
            </div>
        </div>
    </div>
    <div class="wdiget widget_catagory">
        <h4 class="widget-title">Categories</h4>

        <ul class=" list-item space-y-4">

            <li class=" block">
                <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                    <span>Education (1)</span>
                    <span class=" text-2xl">
                        <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                    </span>
                </a>
            </li>

            <li class=" block">
                <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                    <span>Data Science (0)</span>
                    <span class=" text-2xl">
                        <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                    </span>
                </a>
            </li>

            <li class=" block">
                <a href="#" class=" flex justify-between bg-[#F8F8F8] py-[17px] px-5 rounded hover:bg-primary hover:text-white transition-all duration-150">
                    <span>Amazon Tech (0)</span>
                    <span class=" text-2xl">
                        <iconify-icon icon="heroicons:chevron-right-20-solid"></iconify-icon>
                    </span>
                </a>
            </li>

        </ul>
    </div>
</div>