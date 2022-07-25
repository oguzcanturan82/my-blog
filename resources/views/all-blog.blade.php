<link rel="stylesheet" href="/admin-nav.css">
<link rel="stylesheet" href="/cards.css">

<style>
    body {
        font-family: 'Nunito', sans-serif;
        background: #f3f4f6;
    }
    .container{

        display: flex;
        gap: 5%;
        width: 80%;
        margin: 10vh auto 7.5vh;
    }
    .cards{
        row-gap: 2.2%;
    }
    .card-actions{
        display: flex;
        gap: 5px;
    }
    .card-actions a{
        color: white;
        padding: 4px 10px;
        border-radius: 4px;
    }
    .del-btn{
        background: red;
    }
    .edit-btn{
        background: blue;
    }
</style>
<x-app-layout>
    <x-slot name="header">
            <div class="nav">
                <a href="/">{{ __('Anasayfa\'ya Dön') }}</a>
                <a href="/add-blog">{{ __('Blog Ekle') }}</a>
                <a href="/all-blog" class="nav-active">{{ __('Tüm Blogları Görüntüle') }}</a>
                <a href="/add-category">{{ __('Kategori Ekle') }}</a>
            </div>
    </x-slot>

    <div class="container">
        <div class="cards">
            @foreach($blogs as $data)
                <div class="card w-40">
                    <div class="card-img">
                        <a href="/{{ explode(',', $data->category)[0] }}/{{ $data->link }}">
                            <img loading="lazy" src="{{ $data->thumb_path }}">
                        </a>
                    </div>
                    <div class="card-bottom">
                        <div class="card-actions">
                            <a class="del-btn" href="/delete-blog/{{ $data->id }}" class="card-title">Sil</a>
                            <a class="edit-btn" href="/edit-blog/{{ $data->id }}" class="card-title">Duzenle</a>
                        </div>
                        <?php
                            $categories = explode(",", $data->category);
                        ?>
                        <div class="card-categories">
                            @foreach($categories as $category)
                                <a class="card-category" href="/{{ $category }}">{{ $category }}</a>
                            @endforeach
                        </div>
                        <div class="card-title">
                            <a href="/{{ explode(',', $data->category)[0] }}/{{ $data->link }}">
                                {{ $data->title }}
                            </a>
                        </div>
                        <div class="card-desc">
                            {{ substr($data->content, 0, 55) }}...
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
