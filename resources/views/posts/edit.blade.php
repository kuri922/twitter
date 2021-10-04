
<form method="POST" action="/posts{{ $post->id }}">
{{ csrf_field() }}
<input type="hidden" name="_method" value="PUT">
<input type="text" name="_title" value="{{ $post=>title }}">
<input type="text" name="_content" value="{{ $post->content }}">
<input type="submit">
</form>