<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            All Links
        </h2>
    </x-slot>
    <div class="max-w-6xl mx-auto mt-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    #</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Original_url</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Short_url</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    name</th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Action</th>
                                    
                            </tr>
                        </thead>
                        <tbody class="dark:bg-gray-400 divide-y divide-gray-200">
                            <tr></tr>
                            @foreach ($links as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $loop->index + 1 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->original_url }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ url(@$item->short_url) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->ShortUrltoUser->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                
                                        <form method="POST" action="{{ route('short.destroy') }}">
                                            @csrf
                                            <input type="hidden" class="border border-grey-300 rounded-lg dark:bg-gray-600" type="text" value="{{$item->id}}" name="id" />
                                            <button class="m-2 px-6 py-2 bg-red-600 hover:bg-red-700 rounded-lg" type="submit" >delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            <!-- More items... -->
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>





</x-app-layout>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
