document.addEventListener("DOMContentLoaded", function(event) {
    // Pre-populate login creds
    document.querySelector('.outside #input-email').value = "david.hasselhoff@example.com";
    document.querySelector('.outside #input-password').value = "secretsecrets";

    // Add welcome message
    var welcome = document.createElement('div');
    welcome.classList.add(...`absolute top-0 w-full mx-auto text-left text-sm p-4 bg-yellow dark:bg-dark-blue-100 dark:border-none shadow-lg`.split(' '));
    welcome.innerHTML = `
        <p>👋 <strong>Welcome to the Statamic Demo.</strong> Log in using the provided account, take a look around, and see how your actions are reflected on the front-end. Every 30 minutes all changes are wiped clean, so don't worry too much about breaking anything.</p>
    `;

    document.querySelector('body').insertAdjacentElement('afterend', welcome);
    document.querySelector('.logo').style.marginTop = '40px';

});
