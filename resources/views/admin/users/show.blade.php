<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-display text-2xl sm:text-3xl text-ink leading-tight">
                {{ __('User Details') }}
            </h2>
            <a href="{{ route('users.index') }}" class="bg-inklight hover:bg-ink text-white font-semibold px-6 py-3 rounded-xl transition-all inline-flex items-center gap-2">
                <span class="material-symbols-outlined">arrow_back</span> Back
            </a>
        </div>
    </x-slot>

    <div class="py-12 bg-cream min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100">
                <div class="p-6 sm:p-8">
                    <dl class="grid grid-cols-1 gap-6">
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-1">ID</dt>
                            <dd class="text-ink font-mono font-semibold text-lg">{{ $user->id }}</dd>
                        </div>
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-1">Name</dt>
                            <dd class="text-ink font-semibold text-lg">{{ $user->name }}</dd>
                        </div>
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-1">Email</dt>
                            <dd class="text-ink font-semibold text-lg">{{ $user->email }}</dd>
                        </div>
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-2">Roles</dt>
                            <dd class="mt-1">
                                @if($user->roles->count() > 0)
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($user->roles as $role)
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-accent/20 text-accent border border-accent/30">
                                                {{ $role->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-ink/40">No roles assigned</span>
                                @endif
                            </dd>
                        </div>
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-2">Direct Permissions</dt>
                            <dd class="mt-1">
                                @if($user->permissions->count() > 0)
                                    <div class="flex flex-wrap gap-2">
                                        @foreach($user->permissions as $permission)
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800 border border-blue-200">
                                                {{ $permission->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                @else
                                    <span class="text-ink/40">No direct permissions assigned</span>
                                @endif
                            </dd>
                        </div>
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-1">Created</dt>
                            <dd class="text-ink font-semibold">{{ $user->created_at->format('d/m/Y H:i:s') }}</dd>
                        </div>
                        <div class="p-4 bg-cream rounded-xl border-2 border-gray-200">
                            <dt class="text-xs font-bold text-ink/60 uppercase tracking-wide mb-1">Updated</dt>
                            <dd class="text-ink font-semibold">{{ $user->updated_at->format('d/m/Y H:i:s') }}</dd>
                        </div>
                    </dl>

                    <div class="mt-8 flex space-x-4 pt-6 border-t-2 border-gray-200">
                        <a href="{{ route('users.edit', $user) }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-xl transition-all inline-flex items-center gap-2 shadow-lg hover:shadow-xl">
                            <span class="material-symbols-outlined">edit</span> Edit
                        </a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this user?');">
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
