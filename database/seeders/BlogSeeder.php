<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 66; $i++) {
            if($i < 6){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Genel",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 6 and $i < 11){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Saglik",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 11 and $i < 17){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Teknoloji",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 17 and $i < 24){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Magazin",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 24 and $i < 31){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Spor",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 31 and $i < 39){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Siyaset",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 39 and $i < 45){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Ekonomi",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 45 and $i < 50){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Genel,Ekonomi",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 50 and $i < 54){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Siyaset,Ekonomi",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 54 and $i < 60){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Saglik,Genel",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            if($i > 60 and $i < 66){
                Blog::create([
                    'title' => "Deneme Blog $i",
                    'link' => "deneme-blog-$i",
                    'category' => "Siyaset,Genel",
                    'content' => "
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tincidunt justo, aliquam mattis justo. Vivamus venenatis in neque nec molestie. In semper malesuada lectus, vitae egestas ex mattis eu. Cras eget dui facilisis, faucibus velit non, fringilla augue. Donec non urna vitae mauris accumsan egestas ac vitae sem. Donec eu ipsum pharetra, scelerisque magna vitae, imperdiet odio. In consectetur nulla urna. Etiam vel ornare leo. Morbi ac libero ut erat convallis ultrices vel ac elit. Integer aliquet pharetra ligula quis vestibulum.

                        Aenean facilisis volutpat dolor vulputate blandit. Vivamus rhoncus urna a dapibus finibus. Curabitur vulputate orci vitae sagittis auctor. Fusce aliquam massa vel metus cursus maximus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula ligula, tristique vitae ligula in, egestas euismod purus. Mauris urna ligula, gravida quis nibh at, egestas egestas nulla. Suspendisse pretium malesuada sem, ut tempor dolor varius sit amet. Fusce tincidunt mollis pulvinar. Quisque quis lobortis nisl.
                        
                        Integer ultricies ligula augue, et tincidunt metus cursus vel. Etiam vitae nisi vehicula, mollis ante id, convallis ante. Nullam blandit, orci ut pellentesque tristique, felis quam luctus nunc, a mattis ligula nisi eget nunc. Sed faucibus elit ac risus aliquet congue. Nunc.
                    ",
                    'thumb_path' => "https://bazartrk.com/651-300x200.jpeg",
                    'banner_path' => "https://bazartrk.com/523-1000x500.jpeg"
                ]);
            }
            
        }
    }
}
