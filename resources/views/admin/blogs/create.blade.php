<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-display text-2xl sm:text-3xl text-ink leading-tight">
                {{ __('Create New Blog') }}
            </h2>
            <a href="{{ route('blogs.index') }}" class="bg-inklight hover:bg-ink text-white font-semibold px-6 py-3 rounded-xl transition-all inline-flex items-center gap-2">
                <span class="material-symbols-outlined">arrow_back</span> Back
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-cream min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Error Messages -->
            @if($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 text-red-700 px-6 py-4 rounded-xl mb-6 shadow-sm">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="material-symbols-outlined text-red-500">error</span>
                        <span class="font-bold">Please fix the following errors:</span>
                    </div>
                    <ul class="list-disc list-inside ml-6 space-y-1">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Two Column Layout: Form and Preview -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Form Column -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                    <div class="p-6 sm:p-8">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title -->
                            <div class="mb-6">
                                <label for="title" class="block text-sm font-bold text-ink mb-2">
                                    Title <span class="text-red-500">*</span>
                                </label>
                                <input type="text"
                                       id="title"
                                       name="title"
                                       value="{{ old('title') }}"
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all bg-white text-ink"
                                       required>
                            </div>

                            <!-- Excerpt -->
                            <div class="mb-6">
                                <label for="excerpt" class="block text-sm font-bold text-ink mb-2">
                                    Excerpt/Description <span class="text-red-500">*</span>
                                </label>
                                <textarea id="excerpt"
                                          name="excerpt"
                                          rows="4"
                                          class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all bg-white text-ink resize-none"
                                          required>{{ old('excerpt') }}</textarea>
                                <p class="mt-2 text-sm text-ink/60">Short description that will appear in the blog list</p>
                            </div>

                            <!-- Content -->
                            <div class="mb-6">
                                <label for="content" class="block text-sm font-bold text-ink mb-2">
                                    Full Content
                                </label>
                                <textarea id="content"
                                          name="content"
                                          rows="10"
                                          class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all bg-white text-ink resize-none">{{ old('content') }}</textarea>
                                <p class="mt-2 text-sm text-ink/60">Full blog content (optional)</p>
                            </div>

                            <!-- Image -->
                            <div class="mb-6">
                                <label for="image" class="block text-sm font-bold text-ink mb-2">
                                    Image
                                </label>
                                <input type="file"
                                       id="image"
                                       name="image"
                                       accept="image/*"
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:bg-accent file:text-white file:font-semibold file:cursor-pointer hover:file:bg-accentlight">
                                <p class="mt-2 text-sm text-ink/60">Formats: JPEG, PNG, JPG, GIF (max. 2MB)</p>
                            </div>

                            <!-- Published At -->
                            <div class="mb-6">
                                <label for="published_at" class="block text-sm font-bold text-ink mb-2">
                                    Publication Date
                                </label>
                                <input type="datetime-local"
                                       id="published_at"
                                       name="published_at"
                                       value="{{ old('published_at') }}"
                                       class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all bg-white text-ink">
                            </div>

                            <!-- Is Published -->
                            <div class="mb-6">
                                <label class="flex items-center cursor-pointer group">
                                    <input type="checkbox"
                                           name="is_published"
                                           value="1"
                                           {{ old('is_published') ? 'checked' : '' }}
                                           class="w-5 h-5 rounded border-2 border-gray-300 text-accent focus:ring-2 focus:ring-accent cursor-pointer">
                                    <span class="ml-3 text-sm font-semibold text-ink group-hover:text-accent transition-colors">Publish immediately</span>
                                </label>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                                <a href="{{ route('blogs.index') }}" class="px-6 py-3 border-2 border-gray-300 rounded-xl text-ink font-semibold hover:bg-gray-50 transition-all">
                                    Cancel
                                </a>
                                <button type="submit" class="btn-accent text-white font-bold px-8 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all inline-flex items-center gap-2">
                                    <span class="material-symbols-outlined">save</span> Save Blog
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Preview Column -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 sticky top-4">
                    <div class="p-6 sm:p-8">
                        <h2 class="text-2xl font-display text-ink mb-6 pb-3 border-b-2 border-gray-200">Preview</h2>
                        <div class="preview-container">
                            <!-- Blog Card Preview -->
                            <div class="bg-white border-2 border-gray-200 rounded-2xl shadow-lg overflow-hidden card-hover">
                                <!-- Image Preview -->
                                <div class="relative h-48 sm:h-56 overflow-hidden bg-gray-100">
                                    <img id="preview-image" src="" alt="Preview" class="w-full h-full object-cover hidden">
                                    <div id="preview-image-placeholder" class="w-full h-full flex items-center justify-center text-gray-400">
                                        <span class="material-symbols-outlined text-4xl">image</span>
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col flex-grow">
                                    <!-- Date Preview -->
                                    <div class="mb-3">
                                        <span id="preview-date" class="text-xs text-ink/60 font-medium">Not set</span>
                                    </div>
                                    <!-- Title Preview -->
                                    <h3 id="preview-title" class="text-xl sm:text-2xl font-display text-ink mb-3 leading-tight">
                                        Your blog title will appear here
                                    </h3>
                                    <!-- Excerpt Preview -->
                                    <p id="preview-excerpt" class="text-ink/70 mb-4 flex-grow text-sm sm:text-base leading-relaxed">
                                        Your blog excerpt/description will appear here...
                                    </p>
                                    <!-- Read More Button -->
                                    <a href="#" class="inline-block btn-accent text-white font-bold px-6 py-3 rounded-xl hover:shadow-lg transition-all text-sm w-full sm:w-auto text-center">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Preview functionality
        const titleInput = document.getElementById('title');
        const excerptInput = document.getElementById('excerpt');
        const contentInput = document.getElementById('content');
        const imageInput = document.getElementById('image');
        const publishedAtInput = document.getElementById('published_at');

        const previewTitle = document.getElementById('preview-title');
        const previewExcerpt = document.getElementById('preview-excerpt');
        const previewDate = document.getElementById('preview-date');
        const previewImage = document.getElementById('preview-image');
        const previewImagePlaceholder = document.getElementById('preview-image-placeholder');

        // Update title preview
        titleInput.addEventListener('input', function() {
            previewTitle.textContent = this.value || 'Your blog title will appear here';
        });

        // Update excerpt preview
        excerptInput.addEventListener('input', function() {
            previewExcerpt.textContent = this.value || 'Your blog excerpt/description will appear here...';
        });

        // Update date preview
        publishedAtInput.addEventListener('change', function() {
            if (this.value) {
                const date = new Date(this.value);
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                previewDate.textContent = date.toLocaleDateString('en-US', options);
            } else {
                previewDate.textContent = 'Not set';
            }
        });

        // Update image preview
        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    previewImage.classList.remove('hidden');
                    previewImagePlaceholder.classList.add('hidden');
                };
                reader.readAsDataURL(file);
            } else {
                previewImage.classList.add('hidden');
                previewImagePlaceholder.classList.remove('hidden');
            }
        });

        // Initialize with old values if they exist
        @if(old('title'))
            previewTitle.textContent = '{{ old('title') }}';
        @endif

        @if(old('excerpt'))
            previewExcerpt.textContent = '{{ old('excerpt') }}';
        @endif

        @if(old('published_at'))
            const oldDate = new Date('{{ old('published_at') }}');
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            previewDate.textContent = oldDate.toLocaleDateString('en-US', options);
        @endif
    </script>

    <style>
        .font-display { font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.02em; }
        .font-sans { font-family: 'Outfit', sans-serif; }
        .ink { color: #0f172a; }
        .inklight { color: #1e293b; }
        .accent { color: #6ebb1c; }
        .accentlight { color: #8dd43a; }
        .cream { background-color: #fefce8; }
        .btn-accent { background: linear-gradient(135deg, #6ebb1c 0%, #5a9516 100%); }
        .btn-accent:hover { background: linear-gradient(135deg, #8dd43a 0%, #6ebb1c 100%); }
        .card-hover { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .card-hover:hover { transform: translateY(-6px); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15); }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
</x-app-layout>
