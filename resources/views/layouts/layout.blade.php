<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('doc_title')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="https://i.pinimg.com/originals/f3/7b/52/f37b5273252024d60d9bb5c73bccd627.png" alt="planet logo">
                <a id="logo" href="/">Planets</a>
            </div>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/create">Create</a>
            </nav>
        </div>
        <span></span>
    </header>
    <main>
        @yield("doc_content")
    </main>
    <footer>
        <p>&copy; Copyright - all rights reserved</p>
    </footer>
</body>
</html>