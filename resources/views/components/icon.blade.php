@props(['name' => 'shield', 'class' => 'h-6 w-6'])

@php
    // 24×24 outline icons (stroke = currentColor). Product icons are keyed by
    // the value stored in services.icon, so admins can pick one by name.
    $paths = [
        'car' => '<path d="M5 17h14M5 17a2 2 0 1 0 4 0M5 17H4a1 1 0 0 1-1-1v-3.2a2 2 0 0 1 .4-1.2L6 8.2A2 2 0 0 1 7.6 7.4h8.8a2 2 0 0 1 1.6.8l2.6 3.4a2 2 0 0 1 .4 1.2V16a1 1 0 0 1-1 1h-1m-4 0a2 2 0 1 0 4 0M3.5 12h17"/>',
        'home' => '<path d="m3 10.5 9-7 9 7"/><path d="M5 9v10.5a.5.5 0 0 0 .5.5H10v-6h4v6h4.5a.5.5 0 0 0 .5-.5V9"/>',
        'heart' => '<path d="M12 20s-7.5-4.6-9.2-9.4C1.7 7.4 3.8 4 7.2 4c2 0 3.5 1.1 4.8 2.8C13.3 5.1 14.8 4 16.8 4c3.4 0 5.5 3.4 4.4 6.6C19.5 15.4 12 20 12 20Z"/>',
        'health' => '<rect x="3" y="3" width="18" height="18" rx="4"/><path d="M12 8v8M8 12h8"/>',
        'plane' => '<path d="M10.2 13.8 4 11.5l1.4-1.4 6.6.9 4.6-4.6a2 2 0 0 1 2.9 2.9L14.9 14l.9 6.6-1.4 1.4-2.3-6.2-3 3v2.4L7.7 22.6 6.4 19.6 3.4 18.3l1.4-1.4h2.4l3-3.1Z"/>',
        'briefcase' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2M3 12.5h18M10.5 12.5v1.5h3v-1.5"/>',
        'ship' => '<path d="M4 15.5 3 12h18l-1.5 4.5M6 12V8h12v4M10 8V5h4v3"/><path d="M2.5 19.5c1.5 0 2.2-1 3.3-1s1.8 1 3.3 1 2.2-1 3.4-1 1.8 1 3.3 1 2.2-1 3.3-1 1.6.7 2.4 1"/>',
        'scale' => '<path d="M12 3v18M7 21h10M5 7h14M5 7l-3 7a3.5 3.5 0 0 0 6 0L5 7Zm14 0-3 7a3.5 3.5 0 0 0 6 0l-3-7Z"/>',
        'building' => '<path d="M4 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16M16 9h2a2 2 0 0 1 2 2v10M3 21h18M8 7h4M8 11h4M8 15h4"/>',
        'flame' => '<path d="M12 21c-3.9 0-7-2.9-7-6.6 0-2.6 1.4-4.6 3-6.3.3 1.5 1.1 2.7 2.3 3.3C10 8 11.5 5 14 3c.4 2.6 1.7 4.3 3 5.9 1.2 1.5 2 3.2 2 5.5C19 18.1 15.9 21 12 21Z"/><path d="M12 21c-1.7 0-3-1.3-3-3 0-1.5 1-2.6 2-3.5.2 1 .8 1.6 1.5 1.9.3-1.3 1-2.4 1.9-3.2.4 1.4 1.6 2.6 1.6 4.8 0 1.7-1.3 3-3 3Z"/>',
        'award' => '<circle cx="12" cy="9" r="6"/><path d="m8.5 14 -1.5 7 5-2.5 5 2.5-1.5-7"/>',
        'target' => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.2"/>',
        'eye' => '<path d="M2.5 12S6 5.5 12 5.5 21.5 12 21.5 12 18 18.5 12 18.5 2.5 12 2.5 12Z"/><circle cx="12" cy="12" r="3"/>',
        'shield' => '<path d="M12 3 4.5 6v5.6c0 4.7 3.2 8.4 7.5 9.4 4.3-1 7.5-4.7 7.5-9.4V6L12 3Z"/>',
        'shield-check' => '<path d="M12 3 4.5 6v5.6c0 4.7 3.2 8.4 7.5 9.4 4.3-1 7.5-4.7 7.5-9.4V6L12 3Z"/><path d="m8.8 12 2.2 2.2 4.4-4.4"/>',
        'bolt' => '<path d="M13 3 5 13.5h6L10 21l8-10.5h-6L13 3Z"/>',
        'users' => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20c.6-3.4 3.2-5.5 6.5-5.5s5.9 2.1 6.5 5.5M16 4.8a3.5 3.5 0 0 1 0 6.4M18 14.8c1.9.7 3.2 2.5 3.5 5.2"/>',
        'chat' => '<path d="M4 5.5A1.5 1.5 0 0 1 5.5 4h13A1.5 1.5 0 0 1 20 5.5v10a1.5 1.5 0 0 1-1.5 1.5H9l-5 4V5.5Z"/><path d="M8 9h8M8 12.5h5"/>',
        'document' => '<path d="M6 3h8l5 5v12a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/><path d="M14 3v5h5M8.5 13h7M8.5 16.5h7"/>',
        'clipboard' => '<rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4V3h6v1M9 10h6M9 14h6M9 18h3"/>',
        'phone' => '<path d="M5 3h3.2l1.6 4.4-2.1 1.3a11 11 0 0 0 7.6 7.6l1.3-2.1L21 15.8V19a2 2 0 0 1-2 2C10.7 21 3 13.3 3 5a2 2 0 0 1 2-2Z"/>',
        'mail' => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3.5 6.5 8.5 6.5 8.5-6.5"/>',
        'map-pin' => '<path d="M12 21s-7-6.1-7-11.5a7 7 0 0 1 14 0C19 14.9 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.5"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'check' => '<path d="m5 12.5 4.5 4.5L19 7.5"/>',
        'check-circle' => '<circle cx="12" cy="12" r="9"/><path d="m8.5 12.2 2.4 2.4 4.6-4.8"/>',
        'arrow-right' => '<path d="M5 12h14M13 6l6 6-6 6"/>',
        'arrow-up-right' => '<path d="M7 17 17 7M8 7h9v9"/>',
        'chevron-down' => '<path d="m6 9 6 6 6-6"/>',
        'menu' => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'x' => '<path d="M6 6l12 12M18 6 6 18"/>',
        'lock' => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7.5a4 4 0 0 1 8 0v3"/>',
        'globe' => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.5 3.8 5.5 3.8 9s-1.3 6.5-3.8 9c-2.5-2.5-3.8-5.5-3.8-9S9.5 5.5 12 3Z"/>',
        'chart' => '<path d="M4 20V10M10 20V4M16 20v-7M21 20H3"/>',
        'sparkles' => '<path d="M12 3.5 13.8 9 19.5 11 13.8 13 12 18.5 10.2 13 4.5 11 10.2 9 12 3.5ZM19 3v4M17 5h4M5 17v4M3 19h4"/>',
        'wallet' => '<path d="M4 7.5A2.5 2.5 0 0 1 6.5 5H18v3"/><rect x="4" y="8" width="17" height="11" rx="2"/><path d="M16.5 13.5h.01"/>',
        'gauge' => '<path d="M4.5 18a9 9 0 1 1 15 0"/><path d="m12 13 4-4"/><circle cx="12" cy="13" r="1.2"/>',
        'camera' => '<path d="M4 8h3l1.5-2.5h7L17 8h3a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z"/><circle cx="12" cy="13" r="3.5"/>',
        'dashboard' => '<rect x="3.5" y="3.5" width="7" height="7" rx="1.5"/><rect x="13.5" y="3.5" width="7" height="4.5" rx="1.5"/><rect x="13.5" y="11" width="7" height="9.5" rx="1.5"/><rect x="3.5" y="13.5" width="7" height="7" rx="1.5"/>',
        'image' => '<rect x="3" y="4" width="18" height="16" rx="2"/><circle cx="8.5" cy="9.5" r="1.8"/><path d="m21 16-5-5-9 9"/>',
        'inbox' => '<path d="M3 13.5 5.4 5.6A2 2 0 0 1 7.3 4.2h9.4a2 2 0 0 1 1.9 1.4L21 13.5V18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4.5Z"/><path d="M3 13.5h5l1.5 2.5h5l1.5-2.5h5"/>',
        'user' => '<circle cx="12" cy="8" r="4"/><path d="M4 21c.8-4 4-6.5 8-6.5s7.2 2.5 8 6.5"/>',
        'user-circle' => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="10" r="3"/><path d="M6.6 18.6c1.2-2 3.1-3.1 5.4-3.1s4.2 1.1 5.4 3.1"/>',
        'logout' => '<path d="M15 4h3a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-3M10 8l-4 4 4 4M6 12h10"/>',
        'external' => '<path d="M14 4h6v6M20 4l-9 9M18 14v4a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4"/>',
        'linkedin' => '<rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 10.5V16M8 7.5v.01M11.5 16v-5.5M11.5 13c0-1.6 1-2.6 2.4-2.6s2.1 1 2.1 2.6v3"/>',
        'facebook' => '<path d="M14 8h2.5V4.5H14A3.5 3.5 0 0 0 10.5 8v2.5H8V14h2.5v6.5H14V14h2.5l.5-3.5h-3V8Z"/>',
        'instagram' => '<rect x="3.5" y="3.5" width="17" height="17" rx="4.5"/><circle cx="12" cy="12" r="3.8"/><path d="M17 7v.01"/>',
        'x-social' => '<path d="M4 4l16 16M20 4 4 20" />',
    ];

    $markup = $paths[$name] ?? null;
@endphp

@if ($markup)
    <svg {{ $attributes->merge(['class' => $class]) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">{!! $markup !!}</svg>
@else
    {{-- Unknown key: treat it as a literal symbol (e.g. an emoji typed in the admin). --}}
    <span {{ $attributes->merge(['class' => 'inline-flex items-center justify-center leading-none '.$class]) }} aria-hidden="true">{{ $name }}</span>
@endif
