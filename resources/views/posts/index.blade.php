@extends('layout')

@section('page-title', 'page title')

@section('content')
<main class="flex-1">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">All Posts</h1>

        <div id="empty" class="hidden">
            <div class="rounded-xl border bg-white p-6 text-center">
                <p class="text-gray-600">No posts yet.</p>
                <a href="create.html" class="mt-4 inline-block px-4 py-2 rounded-lg bg-black text-white">Create your first</a>
            </div>
        </div>

        <ul id="postList" class="space-y-4"></ul>
    </div>
</main>


@endsection