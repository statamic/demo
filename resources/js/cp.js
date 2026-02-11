import { router } from '@statamic/cms/inertia';
import WelcomeWidget from './widgets/Welcome.vue';

// Necessary in order for Vue to update its state.
const setInput = (sel, val) => {
    const el = document.querySelector(sel);
    if (!el) return;

    el.focus();
    el.value = val;
    el.dispatchEvent(new Event('input', { bubbles: true }));
};

router.on('navigate', (event) => {
    if (event.detail.page.component.startsWith('auth/')) {
        // Pre-populate login creds
        setInput('[name="email"]', 'david.hasselhoff@example.com');
        setInput('[name="password"]', 'secretsecrets');

        // Add welcome message
        if (! document.querySelector('#welcome')) {
            var welcome = document.createElement('div');
            welcome.id = 'welcome';
            welcome.classList.add(...`w-full mx-auto text-left text-sm p-4 bg-yellow dark:bg-dark-blue-100 dark:border-none shadow-lg`.split(' ')); // These classes are included in Statamic's CSS
            welcome.style.marginTop = '-0.5rem'; // These don't have equivalent in Statamic's CSS
            welcome.style.marginLeft = '-0.5rem';
            welcome.style.marginRight = '-0.5rem';
            welcome.style.width = 'calc(100% + 1rem)';
            welcome.innerHTML = `
        <p>👋 <strong>Welcome to the Statamic Demo.</strong> Log in using the provided account, take a look around, and see how your actions are reflected on the front-end. Every 30 minutes all changes are wiped clean, so don't worry too much about breaking anything.</p>
    `;

            document.querySelector('body').insertAdjacentElement('afterbegin', welcome);
            document.querySelector('.logo').style.marginTop = '30px';
        }
    }
});

Statamic.booting(() => {
    Statamic.$components.register('welcome-widget', WelcomeWidget);
});