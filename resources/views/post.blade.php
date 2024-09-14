<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Blog Posts Section -->
    <section class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img src="{{ $post->img }}" alt="Post 1" class="rounded-t-lg w-full">
                <h3 class="text-xl font-bold mt-4">{{ $post->title }}</h3>
                <p class="mt-2 text-gray-600">{{ $post->content }}</p>
                <div class="mt-2 text-gray-600">
                    <b>By: </b>
                    <a href="{{ url('author', $post->user->username) }}"
                        class="hover:underline font-bold text-blue-500">{{ $post->user->name }}</a>
                    <b>Category : </b>
                    <a href="{{ url('category', $post->category->slug) }}"
                        class="hover:underline text-blue-500">{{ $post->category->name }}</a>
                    <span>| {{ $post->created_at->diffForHumans() }}</span>
                </div>
                <a href="/posts" class="text-indigo-600 font-semibold mt-4 block">&laquo; Back to
                    Posts
                </a>
            </div>
        </div>
    </section>
</x-layout>
