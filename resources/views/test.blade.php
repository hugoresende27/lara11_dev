<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Latest users</h1>

    <ul id="latestUsers">
        <!-- Latest users will be populated here -->
    </ul>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>


<style>

body {
    font-family: sans-serif;
    background-color: #fff;
    color: #333;
}

.dark-mode body {
    background-color: #000;
    color: #fff;
}

</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {

    const latestUsersList = document.getElementById('latestUsers');

    function fetchLatestUsers() {
        axios.get('/api/latest-users')
            .then(response => {
                const users = response.data;
                renderUsers(users);
            })
            .catch(error => {
                console.error('Error fetching latest users:', error);
            });
    }

    function renderUsers(users) {
        latestUsersList.innerHTML = ''; // Clear previous users
        users.forEach(user => {
            const li = document.createElement('li');
            const span = document.createElement('span');
            span.textContent = user.name;
            li.appendChild(span);
            latestUsersList.appendChild(li);
        });
    }

    // Initial fetch
    fetchLatestUsers();

    // Fetch latest users every second
    setInterval(fetchLatestUsers, 1000);

    });

</script>