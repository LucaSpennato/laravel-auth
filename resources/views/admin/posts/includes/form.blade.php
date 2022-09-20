<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input name="title" type="text" class="form-control" id="title"
    value="{{ old('title',$post->title ?? '') }}">
    <div class="form-text">Insert post's title</div>
</div>

<div class="mb-3">
    <label for="author" class="form-label">Author</label>
    <input name="author" type="text" class="form-control" id="author"
    value="{{ old('author',$post->author ?? '') }}">
    <div class="form-text">Insert post's author</div>
</div>

<div class="mb-3">
    <label for="post_image" class="form-label">Image</label>
    <input name="post_image" type="text" class="form-control" id="post_image"
    value="{{ old('post_image',$post->post_image ?? '') }}">
    <div class="form-text">Insert post's image</div>
</div>

<div class="mb-3">
    <label for="post_content" class="form-label">Content</label>
    <textarea name="post_content" class="form-control" id="post_content" cols="30" rows="10">
        {{ old('post_content',$post->post_content ?? '') }}
    </textarea>
    <div class="form-text">Insert post's content</div>
</div>

<div class="d-flex justify-content-center">
    <button class="btn btn-lg btn-primary" type="submit">
        Save
    </button>
</div>

