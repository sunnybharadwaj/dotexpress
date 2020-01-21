<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156566927-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-156566927-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--todo:write meta tags--}}
    <link rel="stylesheet" href="https://use.typekit.net/hse8jpo.css">
    <meta name="description" content="A digital platform for the young generation to Explore new ideas, Voice their thoughts and build upon shared Experiences">
    <meta name="keywords" content="Digital platform, young generation, voice, ideas, children, learn, dot, book, stories, creativity, workshop, indian women, school, hyderabad, education, inspiration, essay, poem, art, express, children's book, role model, The dot that went for a walk, Extraordinary women of India, women scientists of India, Indian sports women, Indian women artists, Indian women entrepreneurs, Indian women role models, Stories for children, inspiration for children, books for children, books for inspiring children, creative writing for children, workshops for children in india, child development, essay competition for children, essay competition india, teach for change, nanhi kali, government schools in india, schools in india, young generation, gender education, creative space for children, platform for children in india, digital platform for children, art by children, choosing a career, educating children, indian role models, website for children, educational website for children, ideas for children">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <title>The Dot Express</title>
</head>
<body>
@yield('content')
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>