<?php 
//collection adalah pembungkus untuk sebuah array yang akan membuat array menjadi lebih sakti
namespace App\Models;
//model
class Post{

    //database boongan
    private static $blog_posts = [ //array numerik

        [ //array asosiatif
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Widura Hasta Sasangka",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis odit, nesciunt harum beatae dolor maxime earum, eveniet ea aut saepe enim tempore, veritatis praesentium! Ipsam dicta reiciendis deleniti mollitia quisquam modi aspernatur consequatur vel adipisci, sit, quo temporibus et numquam ut quaerat a consectetur laborum dolorem voluptas odio maxime fugiat. Dolore aliquam quidem et commodi a aliquid ipsa ab nesciunt officiis saepe optio animi itaque, amet consectetur, dolorem omnis quia veniam ducimus rem dolor! Autem illo expedita dolorum sit vero?
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Chaehyun",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis odit, nesciunt harum beatae dolor maxime earum, eveniet ea aut saepe enim tempore, veritatis praesentium! Ipsam dicta reiciendis deleniti mollitia quisquam modi aspernatur consequatur vel adipisci, sit, quo temporibus et numquam ut quaerat a consectetur laborum dolorem voluptas odio maxime fugiat. Dolore aliquam quidem et commodi a aliquid ipsa ab nesciunt officiis saepe optio animi itaque, amet consectetur, dolorem omnis quia veniam ducimus rem dolor! Autem illo expedita dolorum sit vero?
            "
        ]
    ];
    
    public static function all(){
        // mengambil semua data dari database
        return collect(self::$blog_posts); //jika propertinya bersifat static maka return menggunakan self. sedangkan properti biasa bisa
        //menggunakan $this
    }

    public static function find($slug){
        
        $posts = static::all();// mengambil dulu semua data dari function all() menggunakan collect
        //$posts = self::$blog_posts; tanpa menggunakan collect
        
        //lalu looping jika tidak menggunakan collect
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

         return $posts->firstWhere('slug', $slug);

    }
}

?>