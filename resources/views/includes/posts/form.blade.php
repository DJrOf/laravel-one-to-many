
@if ($errors->any())

<div class="altert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </ul>
</div>  
@endif

@if ($post->exists)
<form action="{{ route('admin.posts.update', $post->id) }}" method="POST" novalidate>
@method('PUT')
@else
<form action="{{ route('admin.posts.store', $post->id) }}" method="POST" novalidate>
@endif
@csrf

</form>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-4 mb-3 form-group">
                <label for="category">Category: </label>
                <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                    <option value="">No Category</option>
                    @foreach($categories as $category)
                    <option @if(old('category_id', $post->category_id) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->label }}</option>
                    @endforeach
                </select>
                {{-- Display error --}}
                @error('category_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div> 
            <div class="col-4">
                <div class="mb-3"> 
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"  >
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3"> 
                    <label for="content" class="form-label">Content</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
            </div>
            <div class="col-2">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="slug" class="form-control" id="slug" name="slug">
            </div>
            <div class="col-6">
                <div class="mb-5"> 
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>
            </div>
            <div class="col-6">
                <img src="https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-vector-picture-icon-png-image_695350.jpg" alt="placeholder" class="img-fluid" width="100px" id="preview">
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center p-3">
                    <button type="reset" class="btn btn-danger me-2">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button></div>
                </div>
                
            </div>
        </div>
    </form>
</div>
