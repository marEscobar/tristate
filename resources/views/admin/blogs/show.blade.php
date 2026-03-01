<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-display text-2xl sm:text-3xl text-ink leading-tight">
                {{ __('View Blog') }}
            </h2>
            <div class="flex space-x-3">
                <a href="{{ route('blogs.edit', $blog) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl transition-all inline-flex items-center gap-2 shadow-lg hover:shadow-xl">
                    <span class="material-symbols-outlined">edit</span> Edit
                </a>
                <a href="{{ route('blogs.index') }}" class="bg-inklight hover:bg-ink text-white font-semibold px-6 py-3 rounded-xl transition-all inline-flex items-center gap-2">
                    <span class="material-symbols-outlined">arrow_back</span> Back
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-cream min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-6 sm:p-8">
                    <!-- Title -->
                    <div class="mb-8">
                        <h2 class="text-4xl sm:text-5xl font-display text-ink leading-tight mb-3">{{ $blog->title }}</h2>
                        <div class="flex items-center gap-4 flex-wrap">
                            @if($blog->is_published)
                                <span class="px-4 py-2 inline-flex text-sm font-bold rounded-full bg-accent/20 text-accent border-2 border-accent/30">
                                    <span class="material-symbols-outlined text-base mr-1">check_circle</span> Published
                                </span>
                            @else
                                <span class="px-4 py-2 inline-flex text-sm font-bold rounded-full bg-gray-100 text-gray-700 border-2 border-gray-200">
                                    <span class="material-symbols-outlined text-base mr-1">draft</span> Draft
                                </span>
                            @endif
                            @if($blog->published_at)
                                <span class="text-ink/60 text-sm font-medium">
                                    <span class="material-symbols-outlined text-base align-middle">calendar_today</span>
                                    {{ $blog->published_at->format('F d, Y') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Image -->
                    @if($blog->image)
                        <div class="mb-8">
                            <img src="{{ asset('storage/' . $blog->image) }}"
                                 alt="{{ $blog->title }}"
                                 class="w-full h-auto rounded-2xl border-2 border-gray-200 shadow-lg">
                        </div>
                    @endif

                    <!-- Meta Information -->
                    <div class="mb-8 grid sm:grid-cols-2 gap-4 p-6 bg-cream rounded-xl border-2 border-gray-200">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-accent text-xl">link</span>
                            <div>
                                <span class="text-xs font-bold text-ink/60 uppercase tracking-wide">Slug</span>
                                <p class="text-ink font-mono font-semibold">{{ $blog->slug }}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-accent text-xl">schedule</span>
                            <div>
                                <span class="text-xs font-bold text-ink/60 uppercase tracking-wide">Created</span>
                                <p class="text-ink font-semibold">{{ $blog->created_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                        @if($blog->published_at)
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-accent text-xl">event</span>
                                <div>
                                    <span class="text-xs font-bold text-ink/60 uppercase tracking-wide">Published</span>
                                    <p class="text-ink font-semibold">{{ $blog->published_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-accent text-xl">update</span>
                            <div>
                                <span class="text-xs font-bold text-ink/60 uppercase tracking-wide">Updated</span>
                                <p class="text-ink font-semibold">{{ $blog->updated_at->format('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Excerpt -->
                    <div class="mb-8">
                        <h3 class="text-xl font-display text-ink mb-4 pb-2 border-b-2 border-gray-200">Excerpt</h3>
                        <p class="text-ink/80 text-lg leading-relaxed">{{ $blog->excerpt }}</p>
                    </div>

                    <!-- Content -->
                    @if($blog->content)
                        <div class="mb-8">
                            <h3 class="text-xl font-display text-ink mb-4 pb-2 border-b-2 border-gray-200">Content</h3>
                            <div class="text-ink/80 text-base leading-relaxed whitespace-pre-wrap prose max-w-none">{{ $blog->content }}</div>
                        </div>
                    @endif

                    <!-- Actions -->
                    <div class="flex justify-end space-x-4 pt-8 border-t-2 border-gray-200">
                        <a href="{{ route('blogs.edit', $blog) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-xl transition-all inline-flex items-center gap-2 shadow-lg hover:shadow-xl">
                            <span class="material-symbols-outlined">edit</span> Edit
                        </a>
                        <form action="{{ route('blogs.destroy', $blog) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold px-8 py-3 rounded-xl transition-all inline-flex items-center gap-2 shadow-lg hover:shadow-xl">
                                <span class="material-symbols-outlined">delete</span> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .font-display { font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.02em; }
        .font-sans { font-family: 'Outfit', sans-serif; }
        .ink { color: #0f172a; }
        .inklight { color: #1e293b; }
        .accent { color: #6ebb1c; }
        .accentlight { color: #8dd43a; }
        .cream { background-color: #fefce8; }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
</x-app-layout>
