<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: oklch(0.15 0.08 231);">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <style>
        /* Custom styles using provided color palette */
        .custom-bg-dark { background-color: oklch(0.92 0.04 231); }
        .custom-bg { background-color: oklch(0.96 0.04 231); }
        .custom-bg-light { background-color: oklch(1 0.04 231); }
        .custom-text { color: oklch(0.15 0.08 231); }
        .custom-text-muted { color: oklch(0.4 0.08 231); }
        .custom-highlight { color: oklch(1 0.08 231); }
        .custom-border { border-color: oklch(0.6 0.08 231); }
        .custom-border-muted { border-color: oklch(0.7 0.08 231); }
        .custom-primary { background-color: oklch(0.4 0.1 231); }
        .custom-secondary { background-color: oklch(0.4 0.1 51); }
        .custom-danger { background-color: oklch(0.5 0.08 30); }
        .custom-warning { background-color: oklch(0.5 0.08 100); }
        .custom-success { background-color: oklch(0.5 0.08 160); }
        .custom-info { background-color: oklch(0.5 0.08 260); }
        
        .custom-form-input {
            border-color: oklch(0.6 0.08 231);
            color: oklch(0.15 0.08 231);
            background-color: oklch(1 0.04 231);
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            width: 100%;
        }
        
        .custom-form-input:focus {
            outline: none;
            border-color: oklch(0.4 0.1 231);
            box-shadow: 0 0 0 3px rgba(156, 163, 175, 0.2);
        }
        
        .custom-btn-primary {
            background-color: oklch(0.4 0.1 231);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .custom-btn-primary:hover {
            background-color: oklch(0.3 0.1 231);
        }
        
        .custom-btn-secondary {
            background-color: transparent;
            border: 1px solid oklch(0.6 0.08 231);
            color: oklch(0.4 0.08 231);
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .custom-btn-secondary:hover {
            border-color: oklch(0.4 0.1 231);
            color: oklch(0.3 0.1 231);
        }
    </style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border custom-border">
            <div class="p-6 sm:px-20 custom-bg-light">
                <div class="mt-8 text-2xl custom-text">
                    Edit User: {{ $user->name }}
                </div>

                <div class="mt-6">
                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="name" class="block custom-text text-sm font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name" class="custom-form-input shadow" value="{{ $user->name }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block custom-text text-sm font-bold mb-2">Email:</label>
                            <input type="email" name="email" id="email" class="custom-form-input shadow" value="{{ $user->email }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="role" class="block custom-text text-sm font-bold mb-2">Role:</label>
                            <select name="role" id="role" class="custom-form-input shadow" required>
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <button type="submit" class="custom-btn-primary">
                                Update User
                            </button>
                            <a href="{{ route('admin.users.index') }}" class="custom-btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
