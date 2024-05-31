@include('components.global_tags.htmlStart')

<div class="flex items-center justify-center h-screen">
    <div class="max-w-md w-full bg-white p-8 rounded-md shadow-md">
      <h2 class="text-xl font-semibold mb-4">Add New Food Table</h2>
      <form action="{{route('admin.food.table.form.post')}}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">Enter Table Number</label>
          <input type="text" name="table_number" id="name" class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>
        <div class="flex justify-end">
          <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Add Table</button>
        </div>
      </form>
    </div>
  </div>
  
  


@include('components.global_tags.htmlEnding')