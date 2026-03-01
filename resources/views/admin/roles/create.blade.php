<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-display text-2xl sm:text-3xl text-ink leading-tight">
                {{ __('Create New Role') }}
            </h2>
            <a href="{{ route('roles.index') }}" class="bg-inklight hover:bg-ink text-white font-semibold px-6 py-3 rounded-xl transition-all inline-flex items-center gap-2">
                <span class="material-symbols-outlined">arrow_back</span> Back
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-cream min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
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

            <!-- Form -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-6 sm:p-8">
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-bold text-ink mb-2">
                                Role Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text"
                                   id="name"
                                   name="name"
                                   value="{{ old('name') }}"
                                   placeholder="e.g: administrator"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-accent focus:border-accent outline-none transition-all bg-white text-ink"
                                   required>
                            <p class="mt-2 text-sm text-ink/60">Example: administrator, editor, user</p>
                        </div>

                        <!-- Permissions -->
                        <div class="mb-6">
                            <label class="block text-sm font-bold text-ink mb-3">
                                Permissions
                            </label>
                            <div class="border-2 border-gray-200 rounded-xl p-4 max-h-96 overflow-y-auto bg-cream/30">
                                @forelse($permissions as $permission)
                                    <label class="flex items-center py-2.5 hover:bg-white rounded-lg px-3 cursor-pointer group transition-colors">
                                        <input type="checkbox"
                                               name="permissions[]"
                                               value="{{ $permission->id }}"
                                               {{ in_array($permission->id, old('permissions', [])) ? 'checked' : '' }}
                                               class="w-5 h-5 rounded border-2 border-gray-300 text-accent focus:ring-2 focus:ring-accent cursor-pointer">
                                        <span class="ml-3 text-sm font-medium text-ink group-hover:text-accent transition-colors">{{ $permission->name }}</span>
                                    </label>
                                @empty
                                    <div class="text-center py-8">
                                        <span class="material-symbols-outlined text-4xl text-gray-300 mb-2">security</span>
                                        <p class="text-ink/60 text-sm">No permissions available.</p>
                                        <a href="{{ route('permissions.create') }}" class="text-accent hover:underline font-semibold mt-2 inline-block">Create one</a>
                                    </div>
                                @endforelse
                            </div>
                            <p class="mt-2 text-sm text-ink/60">Select the permissions that this role will have</p>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="flex justify-end space-x-4 pt-4 border-t border-gray-200">
                            <a href="{{ route('roles.index') }}" class="px-6 py-3 border-2 border-gray-300 rounded-xl text-ink font-semibold hover:bg-gray-50 transition-all">
                                Cancel
                            </a>
                            <button type="submit" class="btn-accent text-white font-bold px-8 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all inline-flex items-center gap-2">
                                <span class="material-symbols-outlined">save</span> Save Role
                            </button>
                        </div>
                    </form>
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
