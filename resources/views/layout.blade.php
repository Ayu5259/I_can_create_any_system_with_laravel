<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('page-title')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="min-h-screen flex flex-col bg-gray-50">
    <!-- Header -->
    @include('layouts.header')

    <!-- Main -->
    @yield('content')


    <!-- Footer -->
    @include('layouts.footer')

    <script>
        // Helpers
        function loadPosts() {
            try {
                return JSON.parse(localStorage.getItem('posts') || '[]');
            } catch {
                return [];
            }
        }

        function formatDate(iso) {
            const d = new Date(iso);
            return d.toLocaleString();
        }

        // Render
        const posts = loadPosts().sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
        const listEl = document.getElementById('postList');
        const emptyEl = document.getElementById('empty');
        const yearEl = document.getElementById('year');

        yearEl.textContent = new Date().getFullYear();

        if (!posts.length) {
            emptyEl.classList.remove('hidden');
        } else {
            posts.forEach(p => {
                const li = document.createElement('li');
                li.className = "rounded-xl border bg-white p-5";
                li.innerHTML = `
          <div class="flex items-start justify-between gap-4">
            <h2 class="text-lg font-semibold">${escapeHtml(p.title)}</h2>
            <time class="text-xs text-gray-500">${formatDate(p.createdAt)}</time>
          </div>
          <p class="mt-2 text-gray-700 whitespace-pre-wrap">${escapeHtml(p.body)}</p>
        `;
                listEl.appendChild(li);
            });
        }

        // Simple HTML escape
        function escapeHtml(str) {
            return String(str)
                .replaceAll('&', '&amp;')
                .replaceAll('<', '&lt;')
                .replaceAll('>', '&gt;')
                .replaceAll('"', '&quot;')
                .replaceAll("'", '&#039;');
        }
    </script>
</body>

</html>