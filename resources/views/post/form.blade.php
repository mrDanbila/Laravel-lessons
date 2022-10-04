<x-new.alert/>
<x-post.header>
	Хэдер для Формы
</x-post.header >
<form action="" method="POST">
	@csrf
	<input name="title">
	<input name="slug">
	<input type="submit">
</form>

@if(isset($title)and isset($slug))
<div>{{$title}}</div>
<div>{{$slug}}</div>
@endif
<x-post.footer />
