@extends('layouts.app')

@section('content')

    <div class="container">
        <header>
            <h1>My posts</h1>
        </header>
        
         
      

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">slug</th>
                <th scope="col">category id</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>
            <tbody>
 
                @forelse($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th> 
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->category->label }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td class="d-flex justify-content-end align-items-center">
                      <form action="{{ route('admin.posts.destroy', $post->id) }}"
                        method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger" 
                            type="submit"
                            style="width: 50px"
                            class="delete-form">
                            <i class="fa-solid fa-trash"></i>
                            Elimina
                        </button>
                    </form>
                    
                    <a href="{{route('admin.posts.show', $post->id )}}">Mostra</a>
                    
               
                    </td>
                  </tr>    
                  @empty
                  <tr><td coldspan=""> <h3>No post</h3> </td></tr>
                  @endforelse
                  
                    
                 
                 
                  
                

             
            </tbody>
          </table>
    </div>
    <ul>
    
@endsection

@section('scripts')

<script>
  const deleteForms = document.querySelectorAll('.delete-form');
  deleteForms.forEach(form=> {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const confirmation = confirm('Confermi?');
      if (confirmation) e.target.submit();
  });
});
</script>

@endsection