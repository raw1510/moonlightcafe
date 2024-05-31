@include('components.global_tags.htmlStart')

<div class="flex items-center justify-center h-screen">
    <div class="max-w-md w-full bg-white p-8 rounded-md shadow-md">
      <h2 class="text-xl font-semibold mb-4">Add Menu Items</h2>
      {{-- {{route('menuCategoryItemsAddForm_post')}} --}}
      <form action="{{route('menu.category.sub.items.form.post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" name="item_name" id="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Price</label>
          <input type="number" name="price" id="price" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
            <label class="text-lg text-black mb-2">Short Description</label><br>      
            <textarea name="food_description" id="content" cols="50" rows="5" class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
        </div>

        <div class="form-input">
            <label class="text-lg text-black mb-2">Food Image:</label>
            <input type="file" name="food_image" id="food_image" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Add in</label>
            <input type="text" name="menu_category_name" id="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" value="{{$data->menuCategory}}" readonly>
          </div>

        <div class="flex justify-end">
          <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Add This Food Item in Category</button>
        </div>

      </form>
    </div>
  </div>
  
  


@include('components.global_tags.htmlEnding')