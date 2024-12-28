<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>映画一覧</title>
    <style>
        .movie-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .movie-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .movie-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .movie-title {
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>映画一覧</h1>

<div class="movie-grid">
    @foreach($movies as $movie)
        <div class="movie-card">
            <img src="{{ $movie->image_url }}" alt="{{ $movie->title }}" class="movie-image">
            <div class="movie-title">{{ $movie->title }}</div>
        </div>
    @endforeach
</div>
</body>
</html>
