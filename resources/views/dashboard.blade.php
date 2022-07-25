<link rel="stylesheet" href="/admin-nav.css">
<x-app-layout>
    <x-slot name="header">
            <div class="nav">
                <a href="/">Anasayfa'ya Dön</a>
                <?php
                    $type = auth()->user()->type;
                    if($type == "reader"){
                        echo '
                            <a href="/search">Tüm Bloglar</a>
                        ';
                    }
                    else{
                        echo '
                            <a href="/add-blog">Blog Ekle</a>
                            <a href="/all-blog">Tüm Blogları Görüntüle</a>
                            <a href="/add-category">Kategori Ekle</a>
                        ';
                    }
                ?>
                
            </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
