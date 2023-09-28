@php
    $user = auth()->user();
    $permissions = explode('|', $permission);
@endphp

@if ($user && $user->hasAnyPermission($permissions))
    {!! $slot !!}
@endif
