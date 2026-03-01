<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-display text-2xl sm:text-3xl text-ink leading-tight">
                {{ __('Reviews Management') }}
            </h2>
            <a href="{{ route('reviews.create') }}" class="btn-accent text-white font-bold px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all inline-flex items-center gap-2">
                <span class="material-symbols-outlined">add</span> New Review
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-cream min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-accent text-green-700 px-6 py-4 rounded-xl mb-6 shadow-sm">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-accent">check_circle</span>
                        <span class="font-semibold">{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            <!-- Reviews Table -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-6 sm:p-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-ink">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Name</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Rating</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Comment</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($reviews as $review)
                                    <tr class="hover:bg-cream/50 transition-colors">
                                        <td class="px-6 py-4">
                                            <div class="text-sm font-semibold text-ink">{{ $review->name }}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-1">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $review->rating)
                                                        <span class="material-symbols-outlined text-accent" style="font-variation-settings: 'FILL' 1;">star</span>
                                                    @else
                                                        <span class="material-symbols-outlined text-gray-300" style="font-variation-settings: 'FILL' 0;">star</span>
                                                    @endif
                                                @endfor
                                                <span class="ml-2 text-sm text-ink/60 font-semibold">({{ $review->rating }}/5)</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-ink/80 max-w-md">
                                                {{ \Illuminate\Support\Str::limit($review->comment, 100) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            @if($review->is_approved)
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-accent/20 text-accent border border-accent/30">
                                                    Approved
                                                </span>
                                            @else
                                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-gray-100 text-gray-700 border border-gray-200">
                                                    Pending
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-ink">
                                                {{ $review->created_at->format('d/m/Y') }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium">
                                            <div class="flex space-x-3">
                                                <a href="{{ route('reviews.edit', $review) }}" class="text-accent hover:text-accentlight font-semibold transition-colors inline-flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-base">edit</span> Edit
                                                </a>
                                                <form action="{{ route('reviews.toggleApproval', $review) }}" method="POST" class="inline">
                                                    @csrf
                                                    @if($review->is_approved)
                                                        <button type="submit" class="text-yellow-600 hover:text-yellow-700 font-semibold transition-colors inline-flex items-center gap-1">
                                                            <span class="material-symbols-outlined text-base">visibility_off</span>
                                                            Unapprove
                                                        </button>
                                                    @else
                                                        <button type="submit" class="text-green-600 hover:text-green-700 font-semibold transition-colors inline-flex items-center gap-1">
                                                            <span class="material-symbols-outlined text-base">visibility</span>
                                                            Approve
                                                        </button>
                                                    @endif
                                                </form>
                                                <form action="{{ route('reviews.destroy', $review) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this review?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-700 font-semibold transition-colors inline-flex items-center gap-1">
                                                        <span class="material-symbols-outlined text-base">delete</span> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-12 text-center">
                                            <div class="flex flex-col items-center gap-3">
                                                <span class="material-symbols-outlined text-6xl text-gray-300">star</span>
                                                <p class="text-ink/60 text-lg">No reviews registered.</p>
                                                <a href="{{ route('reviews.create') }}" class="btn-accent text-white font-bold px-6 py-3 rounded-xl inline-flex items-center gap-2 mt-2">
                                                    <span class="material-symbols-outlined">add</span> Create a new one
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    @if($reviews->hasPages())
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            {{ $reviews->links() }}
                        </div>
                    @endif
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
        .btn-accent { background: linear-gradient(135deg, #6ebb1c 0%, #5a9516 100%); }
        .btn-accent:hover { background: linear-gradient(135deg, #8dd43a 0%, #6ebb1c 100%); }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
</x-app-layout>

