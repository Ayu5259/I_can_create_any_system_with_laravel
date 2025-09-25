@extends('layout')

@section('page-title', 'create post')

@section('content')
<main class="flex-1">
    <div class="max-w-2xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Create a New Post</h1>

        <form id="postForm" class="space-y-5 rounded-xl border bg-white p-6">
            <div>
                <label for="title" class="block text-sm font-medium mb-2">Title</label>
                <input id="title" name="title" type="text" required
                    class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black" placeholder="Post title" />
            </div>

            <div>
                <label for="body" class="block text-sm font-medium mb-2">Content</label>
                <textarea id="body" name="body" rows="6" required
                    class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    placeholder="Write something..."></textarea>
            </div>

            <div class="flex items-center justify-between gap-4">
                <a href="index.html" class="px-4 py-2 rounded-lg border hover:bg-gray-100">Cancel</a>
                <button type="submit" class="px-4 py-2 rounded-lg bg-black text-white">Publish</button>
            </div>

            <p id="error" class="hidden text-sm text-red-600">Please add a title and content.</p>
        </form>
    </div>
</main>
@endsection