import './bootstrap';
import Alpine from 'alpinejs';

// Livewire 3 ships its own copy of Alpine and loads it on pages that contain a
// Livewire component (such as the contact form). Starting a second copy breaks
// Livewire's bindings, so only start ours when Livewire hasn't provided one.
if (! window.Alpine) {
    window.Alpine = Alpine;
    Alpine.start();
}

// Fade sections in as they scroll into view.
document.addEventListener('DOMContentLoaded', () => {
    const revealTargets = document.querySelectorAll('[data-reveal]');

    if (! ('IntersectionObserver' in window)) {
        revealTargets.forEach((target) => target.classList.add('revealed'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealTargets.forEach((target) => observer.observe(target));
});
