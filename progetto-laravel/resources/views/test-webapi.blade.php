<button onclick="
    fetch('/api/learn-api', {
        method: 'GET',
        headers: {
            'Accept': 'text/html',
        },
    })
    .then(response => response.text())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
">Richiesta GET</button>

<button onclick="
    fetch('/api/learn-api', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
">Richiesta POST</button>

<button onclick="
    fetch('/api/learn-api', {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
">Richiesta PUT</button>

<button onclick="
    fetch('/api/learn-api', {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
">Richiesta PATCH</button>

<button onclick="
    fetch('/api/learn-api', {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
">Richiesta DELETE</button>