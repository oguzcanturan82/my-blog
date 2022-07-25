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
                <a href="/add-blog">{{ __('Blog Ekle') }}</a>
                <a href="/all-blog">{{ __('Tüm Blogları Görüntüle') }}</a>
                <a href="/add-category" class="nav-active">{{ __('Kategori Ekle') }}</a>
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="page-title">Kategori Ekle</h1>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="form" action="/add-category" method="post">
                    @csrf
                    <div class="input-area">
                        <label for="category_name">Kategori adı:</label>
                        <input type="text" id="category_name" name="category_name">
                    </div>
                    <input class="submit-btn" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
