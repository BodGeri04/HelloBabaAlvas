document.addEventListener('DOMContentLoaded', function () {
    const acceptBtn = document.getElementById('cookie-accept');
    const rejectBtn = document.getElementById('cookie-reject');

    const sendConsent = (value) => {
        fetch('/cookie-consent', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ consent: value })
        })
            .then(response => {
                if (response.ok) {
                    document.getElementById('cookie-consent-banner').style.display = 'none';
                }
            });
    };

    if (acceptBtn) acceptBtn.addEventListener('click', () => sendConsent('accept'));
    if (rejectBtn) rejectBtn.addEventListener('click', () => sendConsent('reject'));
});