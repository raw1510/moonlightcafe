@include('components.global_tags.htmlStart')
    <div class="container flex"> 
        <!--Navbar-->    
        {{-- @extends('admin_panel.menu_category.menu_category_template') --}}
        @include('components.admin_navbar.admin_navbar')

        <!--sending data to menuCategory component-->
        
        
        @section('add form button')
        <a href=" {{ route('admin.menuCategory.addform') }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2"><i class="fa-solid fa-plus"></i> Add New Category</a>
        @endsection

        @section('menu category list')
            @foreach($data as $menuCategoryList)
                <a href="{{ route('menu.category.sub.items.display',$menuCategoryList->id) }}">
                    <div class="food-menu-item flex justify-between bg-[white] border-2 border-black-400 p-3 mt-10 rounded-lg">
                        <div class="wrapper-container-for-2items flex">
                            <div class="fast-food-title text-2xl flex  items-center">
                            <h1> {{$menuCategoryList->menuCategory}} </h1>
                                @foreach ($storeCount as $count => $v)
                                    @if($menuCategoryList->menuCategory == $count)
                                        <p class="text-sm ml-2">count - {{$v}} items</p>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                            <div class="item1-operations text-2xl">
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        
                    </div>
                </a>
            @endforeach
        @endsection
        <!--including menuCategory component-->
        @include('admin_panel.menu_category.menu_category_template')

    </div>
@include('components.global_tags.htmlEnding')