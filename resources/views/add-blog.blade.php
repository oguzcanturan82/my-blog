<?php
use App\Models\Categories;
?>
<link rel="stylesheet" href="/admin-nav.css">
<style>
    .form{
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 90%;
        margin: 4.4vh auto;
    }
    .input-area{
        display: flex;
        flex-direction: column;
        gap: 2.5px;
    }
    .d-flex{
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 5px;
    }
    .submit-btn{
        background: #eee !important;
        padding: 6.5px;
        border-radius: 4.4px;
        transition: all .3s ease;
    }
    .submit-btn:hover{
        background: blue !important;
        color: white;
        cursor: pointer;
    }
    .page-title{
        text-decoration: underline;
        font-size: 2rem;
        color: red;
        font-weight: bold;
        margin-bottom: 1rem;
        padding-left: 25px;
    }   
</style>
<x-app-layout>
    <x-slot name="header">
            <div class="nav">
                <a href="/">{{ __('Anasayfa\'ya Dön') }}</a>
                <a href="/add-blog" class="nav-active">{{ __('Blog Ekle') }}</a>
                <a href="/all-blog">{{ __('Tüm Blogları Görüntüle') }}</a>
                <a href="/add-category">{{ __('Kategori Ekle') }}</a>
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="page-title">Blog Ekle</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="form" action="/add-blog" method="post">
                    @csrf
                    <div class="input-area">
                        <label for="title">Blog başlığı:</label>
                        <input type="text" id="name" name="title">
                    </div>
                    <div class="input-area">
                        <label for="tags">Kategori:</label>
                        <select data-placeholder="Kategori seciniz" multiple class="chosen-select" name="test[]">
                            <option value=""></option>
                            @foreach(Categories::all() as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-area">
                        <label for="content">Metniniz:</label>
                        <textarea rows="5" type="text" id="content" name="content"></textarea>
                    </div>
                    <div class="d-flex">
                        <div class="input-area">
                            <label for="thumb_path">Thumb Resmi:</label>
                            <input type="text" id="thumb_path" name="thumb_path" placeholder="Resim linkini yaziniz...">
                        </div>
                        <div class="input-area">
                            <label for="banner_path">Banner Resmi:</label>
                            <input type="text" id="banner_path" name="banner_path" placeholder="Resim linkini yaziniz...">
                        </div>
                    </div>
                    <input class="submit-btn" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
    <script>
        $(".chosen-select").chosen({
            no_results_text: "Oops, nothing found!"
        })  
    </script>
</x-app-layout>
