<h1 class="code-line" data-line-start=0 data-line-end=1 ><a id="Crealive_JuniorMid_Task_0"></a>Crealive Junior-Mid Task</h1>
<p class="has-line-data" data-line-start="1" data-line-end="2">Kategori bazlı yazıların listelendiği ve görüntülendiği, yönetim panelinin temeli CRUD olan bir blog web uygulaması geliştirme.</p>
<h2 class="code-line" data-line-start=3 data-line-end=4 ><a id="Istenen_ve_ek_zellikler_3"></a>Istenen ve ek özellikler</h2>
<p class="has-line-data" data-line-start="4" data-line-end="12">• Projede PHP 8.1 versiyonunu kullandım.<br>
• PHP Laravel kütüphanesini kullandım, laravel kurulumu yaparken laravel/breeze booststrap kullandım hazır comp ve auth route ları içerdiği için zamandan tasaruf edebilmek için.<br>
• CMS tarafında CREATE READ UPDATE DELETE işlemlerini gerçekleştirilebiliyor.<br>
• Basit üyelik yapısı oluşturdum 2 tipte kullanıcı mevcut reader ve admin readerın sadece view sayfalarına yetkisi var admin’in ise CMS tarafına da yetkisi var.<br>
• Tercihen oluşturduğun yönetim panelinde bulunan yöneticiler için bir<br>
yetkilendirme sistemi oluşturabilirsin.<br>
• Bir yazı birden fazla kategoriye sahip olabiliyor.<br>
• Admin kullanıcısı CMS üzerinden Kategori oluşturabiliyor.</p>
<h2 class="code-line" data-line-start=13 data-line-end=14 ><a id="Proje_kurulumu_13"></a>Proje kurulumu</h2>
<p class="has-line-data" data-line-start="14" data-line-end="22">• Git Clone<br>
• Proje dizinine girip terminal ekranına “composer install” yazıyoruz.<br>
• .env.example uzantılı dosyayı .env şeklinde değiştiriyoruz ve DB_NAME DB_USER DB_PASSWORD gibi boslukları kendimize uygun bir şekilde düzenliyoruz.<br>
• Terminal’e “php artisan key:generate” yazıyoruz.<br>
• Daha sonrasında terminale “npm install” yazıp çalıştırıyoruz ve ardından "npm run build" yazıyoruz. <b>Bazı durumlarda (Laravel 9 ile Breeze starter kitini kullanırken aldığımız bir hata var /public/build/manifest.json 1.resimdeki gibi hatalı oluşturulabilir onu 2.resimdeki gibi düzeltiyoruz.) ama bu projede onun önüne geçtim yinede kontrol edilmesi gerekiyor.</b><br>
<div style="display: flex; gap: 10px;">
    <img style="width: 400px;" src="https://bazartrk.com/hata.png">
    <img style="width: 400px;" src="https://bazartrk.com/cozum.png">
</div>
• Terminal ekranına “php artisan migrate” yazıp db imizi oluşturuyoruz.<br>
• Tercihe göre sql dosyası da import edilebilir.<br>
• Eğer db sql olarak import edilmeyecekse db in kopyası olan Laravel Seeder ını çalıştırmak gerekiyor terminale “php artisan db:seed
” yazıp table daki verileri oluşturuyoruz.<br>
Son adım olarak “php artisan serve” ile projeyi ayağa kaldırıyoruz.</p>
