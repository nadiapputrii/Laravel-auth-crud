<div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
      <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
  
      
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <form>
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            {{-- Button Create --}}
            <div>
              <h1 class="font-bold text-center mb-4">CREATE POST</h1>
            </div>
            {{-- Form Create --}}
            <div>
              <div class="mb-2">
                <input wire:model="postId" type="hidden" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Post">
              </div>
              {{-- Title --}}
              <div class="mb-2">
                <label for="title" class="block">Title</label>
                <input wire:model="title" type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Post">
                @error('title')
                  <h1 class="text-red-500">{{$message}}</h1>
                @enderror
              </div>
              {{-- Description --}}
              <div class="mb-2">
                <label for="description" class="block">Description</label>
                <textarea wire:model="description" type="text" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-blue-900" placeholder="Input Description"></textarea>
                @error('description')
                <h1 class="text-red-500">{{$message}}</h1>
                @enderror
              </div>
            </div>
          </div>
          {{-- Button Form Create --}}
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
              Submit
            </button>
            <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
              Cancel
            </button>
          </div>
      </form>
      </div>
    </div>
  </div>