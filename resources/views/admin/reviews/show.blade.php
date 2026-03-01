<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Review | Tri State Signs & Awnings</title>
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
                    <h1 class="text-2xl font-display font-bold">View Review</h1>
                    <div class="flex space-x-3">
                        <a href="{{ route('reviews.edit', $review) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition-colors">
                            Edit
                        </a>
                        <a href="{{ route('reviews.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-6 py-2 rounded-lg transition-colors">
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="bg-white rounded-lg shadow p-6">
                <!-- Name -->
                <div class="mb-6">
                    <h2 class="text-3xl font-display font-bold text-gray-900">{{ $review->name }}</h2>
                </div>

                <!-- Rating -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Rating</label>
                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $review->rating)
                                <span class="text-yellow-400 text-3xl">★</span>
                            @else
                                <span class="text-gray-300 text-3xl">★</span>
                            @endif
                        @endfor
                        <span class="ml-3 text-lg text-gray-600">({{ $review->rating }}/5)</span>
                    </div>
                </div>

                <!-- Comment -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Comment</label>
                    <div class="bg-gray-50 rounded-lg p-4">
                        <p class="text-gray-700 whitespace-pre-wrap">{{ $review->comment }}</p>
                    </div>
                </div>

                <!-- Meta Information -->
                <div class="mb-6 grid grid-cols-2 gap-4 text-sm border-t border-gray-200 pt-6">
                    <div>
                        <span class="font-medium text-gray-700">Status:</span>
                        @if($review->is_approved)
                            <span class="ml-2 px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-semibold">Approved</span>
                        @else
                            <span class="ml-2 px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-semibold">Pending</span>
                        @endif
                    </div>
                    <div>
                        <span class="font-medium text-gray-700">Created:</span>
                        <span class="text-gray-600 ml-2">{{ $review->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div>
                        <span class="font-medium text-gray-700">Updated:</span>
                        <span class="text-gray-600 ml-2">{{ $review->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('reviews.edit', $review) }}" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-colors">
                        Edit
                    </a>
                    <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this review?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-colors">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

