<html>
<head>
<title>Web Reader</title>
</head>
<body>
<h1>{{ $book_name }}</h1>
<h2>{{ $book_author }}</h2>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3>Chapter {{ $i }}</h3>
<p>
@include("chapter{$i}")
</p>
@endfor
</body>
</html>