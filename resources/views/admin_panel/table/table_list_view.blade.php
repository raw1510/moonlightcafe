  @section('table_qr_header')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
  <title>Qr code generation</title>
  @endsection

  @include('components.global_tags.htmlStart')
  <div class="container flex "> 
      @include('components.admin_navbar.admin_navbar')

      <div class="right-content w-[80%] bg-[#f8f9fa]">

          <div class="food-menu-wrapper p-6 m-8">
              <div class="title p-2 flex justify-between">
      
                  <p class="text-4xl">Food Table List View</p>
                  <span class="search-bar flex justify-between">
                      <a href=" {{ route('admin.food.table.form.get') }}" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-4 py-2.5 text-center me-2"><i class="fa-solid fa-plus"></i> Add Food Table</a>
                  </span>
              </div>

              <div class="flex flex-col ">
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                          <div class="overflow-hidden shadow-md sm:rounded-lg">
                              <table class="min-w-full text-center text-sm font-light text-black">
                                  <thead class="bg-gray-200">
                                      <tr>
                                          <th scope="col" class="px-6 py-4 font-medium">#</th>
                                          <th scope="col" class="px-6 py-4 font-medium">Table No.</th>
                                          <th scope="col" class="px-6 py-4 font-medium">URL</th>
                                          <th scope="col" class="px-6 py-4 font-medium">QR code</th>
                                          <th scope="col" class="px-6 py-4 font-medium">Created at</th>
                                          <th scope="col" class="px-6 py-4 font-medium">Updated at</th>   
                                          <th scope="col" class="px-6 py-4 font-medium">Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody class="bg-white">
                                      @foreach ($data as $item)
                                          <tr class="border-b">
                                              <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $item->id }}</td>
                                              <td class="whitespace-nowrap px-6 py-4">{{ $item->table }}</td>
                                              <td class="whitespace-nowrap px-6 py-4">{{ $item->url }}</td>
                                              <td class="whitespace-nowrap px-6 py-4">{!! $simple !!}</td>
                                              <td class="whitespace-nowrap px-6 py-4">{{ $item->created_at }}</td>
                                              <td class="whitespace-nowrap px-6 py-4">{{ $item->updated_at }}</td>

                                              <td class="whitespace-nowrap px-6 py-4 space-x-2">
                                                  <button class="bg-blue-500 text-white px-4 py-2 rounded update-order" data-id-update="{{ $item->id }}">Update</button>
                                                  <button class="bg-red-500 text-white px-4 py-2 rounded delete-order" data-id-delete="{{ $item->id }}">Delete</button>
                                              </td>
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              
      
              
      
          </div>
      </div>
  </div>
</body>
</html>