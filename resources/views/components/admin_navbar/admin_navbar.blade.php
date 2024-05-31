<div class="left-menu  w-1/5">
    <div class="menu-wrapper">
        <div class="logo p-2 flex justify-center">
            <img src="{{ asset('logo/logo.png') }}" width="200px" alt="">
        </div>

        <div class="menu-item m-2 ">
            <ul class="">
                <a href="" class=""><li><span>Dashboard</span></li></a>
                <li class="p-[2px]"><span>Live Order</span>
                </li>
                <div class="nested-Food-Items pl-7">
                    <ul>
                        <a href=""><li><span><i class="fa-solid fa-bars-progress m-2"></i></span>&nbsp;<span>Recieved Order</span></li></a>
                        <a href=""><li><span><i class="fa-solid fa-circle-check m-2"></i></span>&nbsp;<span>Accepted Order</span></li></a>
                        <a href=""><li><span><i class="fa-regular fa-square-check m-2"></i></span>&nbsp;<span>Completed Order</span></li></a>
                    </ul>
                </div>
            </ul>
        </div>
        <div class="menu-item m-2 ">
            <caption>Users</caption>
            <ul class="pl-7">
                <a href=""><li><span><i class="fa-solid fa-user"></i></span>&nbsp;<span>Customer data</span></li></a>
            </ul>
        </div>
        <div class="menu-item m-2 ">
            <caption>Admin</caption>
            <ul class="pl-4">
                <a href=""><li><span><i class="fa-solid fa-store m-2"></i></span>&nbsp;<span>Store</span></li></a>
                <li><span><i class="fa-solid fa-bowl-food m-2"></i></span>&nbsp;<span>Food Menu</span>
                </li>
                <div class="nested-Food-Items pl-7">
                    <ul>
                        <a href="{{route('admin.menuCategory.display')}}"><li><span><i class="fa-solid fa-bars"></i></span>&nbsp;<span>Menu Items</span></li></a>
                        <a href=""><li><span><i class="fa-solid fa-table"></i></span>&nbsp;<span>Table No.</span></li></a>
                    </ul>
                </div>
            </ul>
        </div>
        
        <div class="menu-item m-2 ">
            <caption>Settings</caption>
            <ul class="pl-7">
                <a href=""><li><span><i class="fa-solid fa-address-card m-2"></i></span> <span>Profile</span></li></a>

                <form action="" method="POST">
                    <li><span><i class="fa-solid fa-right-from-bracket m-2"></i></span><input type="submit" value="Logout"></li>
                
                </form>
            </ul>
        </div>
    </div>
</div>  