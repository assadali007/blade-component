 <!DOCTYPE html>
<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>



<body>
    
    <div {{ $attributes->merge(['class'=> 'bg-yellow-300 p-4 mb-1']) }} >
        {{ $slot }}

    </div>
</body>

</html>


