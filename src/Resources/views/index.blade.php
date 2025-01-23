<h1>Blog List</h1>
@foreach($blogs as $blog)
    <h2><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
    <p>{{ $blog->content }}</p>
@endforeach
