<x-guest-layout>
    <section class="h-screen w-screen flex items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Post</h3>
                            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be
                                careful what you share.</p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="{{ route('posts:store') }}" method="POST">
                            @csrf
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="company-website"
                                                   class="block text-sm font-medium text-gray-700">Post title</label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input
                                                    type="text"
                                                    name="title"
                                                    id="title"
                                                    class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                    placeholder="Give your post a title"
                                                    required
                                                    autofocus
                                                >
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                        <div class="mt-1">
                                            <textarea id="description" name="description" rows="3"
                                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                      placeholder="A description"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">Brief description of your post.</p>
                                    </div>
                                    <div>
                                        <label for="body" class="block text-sm font-medium text-gray-700">Post Body</label>
                                        <div class="mt-1">
                                            <textarea id="body" name="body" rows="3"
                                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                      placeholder="Your post body"></textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">This is your post boyd, make it interesting.</p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                    >
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
