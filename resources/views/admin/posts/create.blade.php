@extends('layouts.app')
@section('content')
<div class="container py-5">

@include('includes.posts.form')
</div>
@endsection

@section('additional-script')
<script>
    const placeholder = 'https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-vector-picture-icon-png-image_695350.jpg';
    const preview = document.getElementById('preview');
    const linkImage = document.getElementById('image');

    linkImage.addEventListener('change', function(){
        const url = linkImage.value;
        if(url){
            preview.setAttribute('src',url);
        }else{
            preview.setAttribute('src',placeholder);
        }
    });
</script>
@endsection 