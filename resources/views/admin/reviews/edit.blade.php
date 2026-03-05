<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Review | Tri State Signs & Awnings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .font-display { font-family: 'Bebas Neue', 'sans-serif'; }
        .font-sans { font-family: 'Outfit', 'sans-serif'; }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <div class="min-h-screen">
        <!-- Header -->
        <header class="bg-ink text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-display font-bold">Edit Review</h1>
                    <a href="{{ route('reviews.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-6 py-2 rounded-lg transition-colors">
                        Back
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Error Messages -->
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form -->
            <div class="bg-white rounded-lg shadow p-6">
                <form action="{{ route('reviews.update', $review) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Name -->
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                               id="name"
                               name="name"
                               value="{{ old('name', $review->name) }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent"
                               required>
                    </div>

                    <!-- Rating -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Rating (Stars) <span class="text-red-500">*</span>
                        </label>
                        <div class="flex items-center space-x-2" id="ratingStars">
                            @for($i = 1; $i <= 5; $i++)
                                <button type="button"
                                        class="rating-star text-3xl transition-colors {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }} hover:text-yellow-400"
                                        data-rating="{{ $i }}">
                                    ★
                                </button>
                            @endfor
                        </div>
                        <input type="hidden" id="rating" name="rating" value="{{ old('rating', $review->rating) }}" required>
                            <p class="mt-2 text-sm text-gray-500">Select from 1 to 5 stars</p>
                    </div>

                    <!-- Comment -->
                    <div class="mb-6">
                        <label for="comment" class="block text-sm font-medium text-gray-700 mb-2">
                            Comment <span class="text-red-500">*</span>
                        </label>
                        <textarea id="comment"
                                  name="comment"
                                  rows="6"
                                  maxlength="1000"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-accent focus:border-accent"
                                  required>{{ old('comment', $review->comment) }}</textarea>
                            <p class="mt-1 text-sm text-gray-500">Maximum 1000 characters</p>
                    </div>

                    <!-- Is Approved -->
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox"
                                   name="is_approved"
                                   value="1"
                                   {{ old('is_approved', $review->is_approved) ? 'checked' : '' }}
                                   class="rounded border-gray-300 text-accent focus:ring-accent">
                            <span class="ml-2 text-sm font-medium text-gray-700">Approved</span>
                        </label>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex justify-end space-x-4">
                        <a href="{{ route('reviews.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors">
                            Cancel
                        </a>
                        <button type="submit" class="px-6 py-2 bg-accent hover:bg-accentlight text-black font-semibold rounded-lg transition-colors">
                            Update Review
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Rating stars functionality
        const ratingStars = document.querySelectorAll('.rating-star');
        const ratingInput = document.getElementById('rating');
        let selectedRating = {{ old('rating', $review->rating) }};

        ratingStars.forEach(star => {
            star.addEventListener('click', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                selectedRating = rating;
                ratingInput.value = rating;

                // Update star display
                ratingStars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.remove('text-gray-300');
                        s.classList.add('text-yellow-400');
                    } else {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });

            // Hover effect
            star.addEventListener('mouseenter', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                ratingStars.forEach((s, index) => {
                    if (index < rating) {
                        s.classList.add('text-yellow-400');
                        s.classList.remove('text-gray-300');
                    }
                });
            });

            star.addEventListener('mouseleave', () => {
                ratingStars.forEach((s, index) => {
                    if (index >= selectedRating) {
                        s.classList.remove('text-yellow-400');
                        s.classList.add('text-gray-300');
                    }
                });
            });
        });
    </script>
</body>
</html>

