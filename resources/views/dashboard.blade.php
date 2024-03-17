<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="unpkg.com/alpinejs" defer></script>

      
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

        <h1>Latest users</h1>

        <ul x-data="latestUsers">

            <template x-for="user in users">

                <li>
                    <span x-text="user.name"></span>
                </li>


            </template>
        </ul>
       
    </body>
</html>

<script>
    document.addEventListener('alpine:init', () => {

        Alpine.date('latestUsers', () => ( {

            init() {
                setInterval(async () => {
                    this.users = (await axios.get('/api/latest-users')).data;
                }, 1000);
            },

            users : [],

        }))
    })
</script>
