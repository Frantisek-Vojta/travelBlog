<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        static $postNumber = 1;

        $posts = [
            // Finsko
            [
                'title' => 'Finsaygdashdhgasdké jezera a severní polární záře',
                'excerpt' => 'Finsko je zemí tisíců jezer a úchvatných přírodních divů. Objevte kouzlo finské přírody a nezapomenutelné zážitky pod polární září.',
                'content' => 'Finsko, známé jako země tisíců jezer, nabízí jedinečné přírodní zážitky. Návštěva finské divočiny je jako vstup do jiného světa. Rozsáhlé lesy, čistá jezera a tichá příroda vytvářejí atmosféru klidu a harmonie. Jedním z největších zážitků je pozorování polární záře, která se na finské obloze objevuje během zimních měsíců. Laponsko, severní část Finska, je ideálním místem pro tento úchvatný přírodní jev. Kromě přírodních krás Finsko nabízí také bohatou saunovou kulturu, která je nedílnou součástí finského životního stylu. Finská příroda je dokonale zachovalá a nabízí nekonečné možnosti pro turistiku, rybaření a pozorování divoké zvěře.',
                'image' => 'https://imageio.forbes.com/specials-images/imageserve/620ca273d9db9336241d67d9/Fantastic-landscape-of-Finland-with-northern-lights-/960x0.jpg?format=jpg&width=960',
                'category' => 'finsko'
            ],
            // Švédsko
            [
                'title' => 'Švédské ostrovy a archipelagy',
                'excerpt' => 'Švédsko s tisíci ostrovy nabízí jedinečné mořské krajiny a poklidnou atmosféru severského života. Poznejte krásu švédského pobřeží.',
                'content' => 'Švédsko je zemí s neuvěřitelným množstvím ostrovů a malebných archipelagů. Stockholm, hlavní město Švédska, je postaven na čtrnácti ostrovech spojených mosty. Nejznámějším archipelagem je Stockholm archipelago s více než 30 000 ostrovy. Každý ostrov má své vlastní kouzlo a charakter. Návštěva těchto ostrovů nabízí jedinečnou příležitost zažít poklidný švédský způsob života. Rybaření, koupání v čisté vodě a procházky nedotčenou přírodou jsou běžnými aktivitami. Švédské ostrovy jsou ideálním místem pro ty, kteří hledají klid a spojení s přírodou. Místní obyvatelé jsou velmi pohostinní a rádi se podělí o své tradice.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmvzkrgolWPQyRs8I8d_MOkyYDfV8hpy_rLQ&s',
                'category' => 'svedsko'
            ],
            // Švýcarsko
            [
                'title' => 'Švýcarské Alpy a horská turistika',
                'excerpt' => 'Švýcarsko je rájem pro milovníky hor a outdoorových aktivit. Objevte majestátní švýcarské Alpy a jejich nekonečné možnosti turistiky.',
                'content' => 'Švýcarsko, srdce Evropy, je proslulé svými majestátními Alpami, které nabízejí jedny z nejkrásnějších horských scenérií na světě. Horské turistice se zde věnují jak místní, tak turisté z celého světa. Švýcarské Alpy nabízejí trasy pro všechny úrovně - od lehkých procházek po náročné vysokohorské túry. Matterhorn, jedna z nejznámějších hor světa, je ikonou švýcarské krajiny. Kromě turistiky Švýcarsko nabízí také vynikající horská střediska, čistá horská jezera a tradiční alpské vesničky. Cesta švýcarskými železnicemi přes hory je zážitkem sám o sobě. Švýcarská kuchyně s fondue a raclette dokonale doplňuje horské zážitky.',
                'image' => 'https://globalsanctions.com/wp-content/uploads/2025/06/Switzerland-flag_-Dasha-Butler-600x400.jpg',
                'category' => 'svycarsko'
            ],
            // Alpy
            [
                'title' => 'Vysokohorská turistika v Alpách',
                'excerpt' => 'Alpy nabízejí jedny z nejkrásnějších vysokohorských tras v Evropě. Objevte krásu alpských velikánů a jejich jedinečnou flóru a faunu.',
                'content' => 'Alpy, nejvyšší pohoří Evropy, se táhnou přes několik zemí a nabízejí nepřeberné množství turistických možností. Vysokohorská turistika v Alpách je zážitkem, na který se nezapomíná. Trasy vedou přes zelené alpské louky, hluboká údolí a nakonec až k ledovcům a vysokým vrcholům. Alpská flóra je mimořádně rozmanitá - od hořců a protěží po vzácné alpské růže. Fauna zahrnuje kamzíky, sviště a orly. Horské chaty poskytují pohostinství a útočiště před nepřízní počasí. Bezpečnost je na prvním místě, proto je důležité mít správné vybavení a zkontrolovat předpověď počasí.',
                'image' => 'https://res.cloudinary.com/enchanting/q_70,f_auto,w_5472,h_3078,c_fit/exodus-web/2023/05/mont-blanc.jpg',
                'category' => 'alpy'
            ],
            // Tatry
            [
                'title' => 'Vysoké Tatry - perla Slovenska',
                'excerpt' => 'Vysoké Tatry jsou nejvyšším pohořím Slovenska a nabízejí úchvatné scenérie, strmé štíty a křišťálově čistá horská jezera.',
                'content' => 'Vysoké Tatry, často nazývané nejmenšími vysokohorskými horami světa, nabízejí impozantní scenérie a vynikající podmínky pro turistiku. Toto pohoří je domovem ikonických štítů jako Gerlach, Lomnický štít a Kriváň. Tatranská jezera, zvaná plesá, jsou křišťálově čistá a odrážejí okolní vrcholy. Turistické trasy vedou přes zelené údolí, skalní průsmyky a nabízejí výhledy, které berou dech. Tatranská příroda je chráněna národním parkem a je domovem vzácných druhů jako kamzík tatranský a svišť horský. Zimní Tatry pak nabízejí vynikající podmínky pro lyžování a snowboarding.',
                'image' => 'https://www.tabataworkout.cz/wp-content/uploads/2021/12/turistika_ve_vysokych_tatrach-tabata_workout.jpg',
                'category' => 'tatry'
            ],
            // Norsko
            [
                'title' => 'Norské fjordy a divoká příroda',
                'excerpt' => 'Norsko je zemí hlubokých fjordů, majestátních hor a úchvatných přírodních scenérií. Poznejte krásu norské divočiny.',
                'content' => 'Norsko, země fjordů a Vikingů, nabízí jedny z nejdramatičtějších přírodních scenérií na světě. Norské fjordy, jako Geirangerfjord a Nærøyfjord, jsou zapsány na seznam UNESCO a jejich krása je naprosto jedinečná. Hory padají přímo do moře a vytvářejí impozantní scenérie. Norsko je také zemí půlnočního slunce v létě a polární záře v zimě. Turistika v Norsku nabízí nesčetné možnosti - od lehkých procházek podél fjordů po náročné výstupy na horské vrcholy. Norská příroda je divoká a nedotčená, plná vodopádů, ledovců a hlubokých lesů. Místní kultura je silně spjata s mořem a horami.',
                'image' => 'https://res.cloudinary.com/simpleview/image/upload/v1669716971/clients/norway/New_Project_1__b5ba995d-8347-4c98-90a1-a8a48035b978.jpg',
                'category' => 'norsko'
            ],
            // Rakousko
            [
                'title' => 'Rakouské Alpy a tyrolské tradice',
                'excerpt' => 'Rakousko kombinuje nádherné alpské scenérie s bohatou kulturou a tradicemi. Objevte kouzlo rakouských hor a jejich pohostinnost.',
                'content' => 'Rakouské Alpy jsou srdcem této horské země a nabízejí dokonalou kombinaci přírodních krás a kulturního bohatství. Tyrolsko, nejznámější rakouská oblast, je proslulé svými dřevěnými domy, tradičními hospůdkami a pohostinnými lidmi. Rakouské hory nabízejí vynikající podmínky pro turistiku v létě a lyžování v zimě. Kitzbühel, St. Anton a Innsbruck jsou jen některá z populárních destinací. Rakouská kuchyně s knedlíky, štrůdlem a tyrolskými specialitami dokonale doplňuje horské zážitky. Místní tradice jsou stále živé a projevují se v lidových slavnostech, hudbě a řemeslech. Rakousko je zemí, kde se příroda snoubí s kulturou.',
                'image' => 'https://images.squarespace-cdn.com/content/v1/551954dfe4b0cc9152288892/d7d97dce-588b-45b0-992a-a3c6f136c69f/DSC06023.JPG',
                'category' => 'rakousko'
            ],
            // Horské túry
            [
                'title' => 'Začínáme s horskou turistikou',
                'excerpt' => 'Horská turistika je skvělý způsob, jak objevovat přírodu a zlepšovat fyzickou kondici. Zde najdete tipy pro začátečníky.',
                'content' => 'Horská turistika je aktivita, která spojuje fyzickou námahu s objevováním krás přírody. Pro začátečníky je důležité začít pozvolna - vybrat si lehčí trasy a postupně zvyšovat náročnost. Základem je správné vybavení: kvalitní turistické boty s dobrou podrážkou, pohodlné oblečení v několika vrstvách, batoh s dostatkem vody a jídla, mapa a případně GPS. Důležité je také zkontrolovat předpověď počasí a informovat někoho o plánované trase. Bezpečnost je na prvním místě - v horách se počasí může rychle změnit. Pravidelnými túrami získáte nejen lepší kondici, ale také úžasné zážitky a vzpomínky na krásné výhledy.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQorb8N9Vox6t3xgEK4qD7TS50Vubij_EqAKFy-iaIOjG8tZGH6gRGEHlSLogVB--ubXVw&usqp=CAU',
                'category' => 'horske-tury'
            ],
        ];

        $postData = $posts[($postNumber - 1) % count($posts)];
        $category = \App\Models\Category::where('slug', $postData['category'])->first();

        $slug = \Str::slug($postData['title']) . '-' . $postNumber;

        $post = [
            'title' => $postData['title'],
            'slug' => $slug,
            'excerpt' => $postData['excerpt'],
            'content' => $postData['content'],
            'featured_image' => $postData['image'],
            'published' => true,
            'published_at' => $this->faker->dateTimeBetween('-60 days', 'now'),
            'user_id' => User::factory(),
            'category_id' => $category ? $category->id : Category::factory(),
        ];

        $postNumber++;
        return $post;
    }
}
