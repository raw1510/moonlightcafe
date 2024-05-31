@include('components.global_tags.htmlStart')



<div class="container flex "> 
    @include('components.admin_navbar.admin_navbar')

    
<div class="right-content w-4/5 bg-[#f8f9fa]">
    <div class="food-menu-wrapper p-6 m-8">

        <div class="fastFood-items-styling-wrapper flex flex-wrap">

            <div class="admin-content p-5 flex flex-row flex-wrap justify-center items-center w-[85%] rounded-lg">
                <!-- Anime Card Grid -->
                <div class="title-pagination w-full p-3 flex justify-between">
                    <h1 class="text-3xl">{{$fetchNameFromMenuCategoryTable}}</h1>
                    <span class="search-bar flex justify-between"><a href="{{route('menu.category.sub.items.form.get',$data)}}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2"><i class="fa-solid fa-plus"></i> Add New Items in Category</a></span>

                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    
                    @foreach($FetchingAllList as $FetchingAllList)
                        <div class="anime-card border-2 border-black rounded-lg p-4 bg-white">
                            <h2 class="text-lg font-semibold mb-2">Name:- {{$FetchingAllList->name}} <p class=" text-md">Price:- {{$FetchingAllList->price}}</p></h2>
                            <img src="{{ asset('foodItemsImage/' . $FetchingAllList->image_url) }}" alt="" class="mb-4">
                            <p>{{$FetchingAllList->description}}</p>
                            
                            <div class="flex justify-between mt-4">
                                <a href="" class="text-blue-500 hover:text-blue-700">Update</a>

                                <a href="" class="text-red-500 hover:text-red-700">Delete</a>
                            </div>
                        </div>
                    @endforeach

                    <!-- End of Dynamically generated Anime Cards -->
                </div>
                <!-- End of Anime Card Grid -->
            </div>
            
            
            
        </div>


</div>
</div>
</div>

@include('components.global_tags.htmlEnding')