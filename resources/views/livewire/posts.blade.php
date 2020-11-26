  <div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            
        </div>

        <h1 style="font-size: 30px">Data Bencana Alam</h1>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg px-4 py-4">
           
            <div class="flex mb-4">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <button wire:click="showModal()" class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-1 px-4 rounded mb-2">
                        Create Post
                    </button>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <input wire:model="search" type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Search Post....">
                </div>
            </div>
            
            @if($isOpen)
                @include('livewire.create')
            @endif

            {{-- notification --}}
            @if (session()->has('info'))
                <div class="bg-yellow-400 border-2 border-bg-yellow-400 rounded-b mb-2 py-3 px-3">
                    <div>
                        <h1 class="text-white font-bold">{{ session('info') }}</h1> 
                    </div>
                </div>
            @endif

            @if (session()->has('delete'))
                <div class="bg-red-700 border-2 border-bg-red-700 rounded-b mb-2 py-3 px-3">
                    <div>
                        <h1 class="text-white font-bold">{{ session('delete') }}</h1> 
                    </div>
                </div>
            @endif

            <table class="table-fixed w-full bg-yellow-50">
                {{-- Judul Tabel --}}
                <thead class="bg-red-900">
                    <tr>
                        <th class="px-4 py-2 text-white w-20">No</th>
                        <th class="px-4 py-2 text-white w-100">Title</th>
                        <th class="px-4 py-2 text-white w-100">Description</th>
                        <th class="px-4 py-2 text-white  w-100">Action</th>
                    </tr>
                </thead>
                {{-- Isi Tabel --}}
                <tbody>
                    @foreach ($posts as $post)    
                        <tr>
                            <td class="px-2 py-3">{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>
                                <button wire:click="edit({{ $post->id }})" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-1 px-4 rounded">
                                    Edit
                                </button>
                                <button wire:click="delete({{ $post->id }})" class="bg-red-700 hover:bg-red-900 text-white font-bold py-1 px-4 rounded">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>

            <div class="mt-4">
                {{$posts->links()}}
            </div>   
        </div>
    </div>
</div>

