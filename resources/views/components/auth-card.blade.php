<!-- resources/views/components/auth-card.blade.php -->

<div class="card">
    <div class="card-header">{{ $title ?? __('Login') }}</div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
