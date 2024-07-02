<form action="" method="post">
    @csrf
    @method($post->id ? "PATCH" : "POST")
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
        @error("title")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('title', $post->slug ) }}">
        @error("slug")
        {{ $message }}
        @enderror
    </div>
    <div class="form-group">
        <label for="slug">Contenu</label>
        <textarea name="content" class="form-control" id="content">{{ old('content', $post->content)}}</textarea>
        @error("content")
        {{ $message }}
        @enderror
    </div>
    <button class="btn btn-primary w-100 mt-4">
        @if($post->id)
            Modifier
        @else
            Créer
        @endif
    </button>
</form>