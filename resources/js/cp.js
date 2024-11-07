document.addEventListener("DOMContentLoaded", function(event) {
    // Pre-populate login creds
    document.querySelector('.outside #input-email').value = "david.hasselhoff@example.com";
    document.querySelector('.outside #input-password').value = "secretsecrets";

    // Add welcome message
    var welcome = document.createElement('div');
    welcome.classList.add(...`max-w-sm mx-auto mb-4 text-center text-xs border border-yellow-dark rounded p-4 bg-yellow dark:bg-dark-blue-100 dark:border-none`.split(' '));
    welcome.innerHTML = `
        <p class="mb-4">👋 Welcome to the Statamic Demo.</p>
        <p class="mb-4">Feel free to log in using the provided account, take a look around, and see how your actions are reflected on the front-end.</p>
        <p>Every 30 minutes everything will be reverted to a clean slate.</p>
    `;

    document.querySelector('.logo').insertAdjacentElement('afterend', welcome);
});
