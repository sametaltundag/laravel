<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Roller
        $roles = ['Admin', 'Editor', 'User'];
        foreach ($roles as $role) {
            $newRole = new Role(['name' => $role]);
            $newRole->save();
        }

        // Kullanıcılar ve Profil Bilgileri
        for ($i = 1; $i <= 5; $i++) {
            $user = new User([
                'name' => 'Kullanıcı ' . $i,
                'email' => 'kullanici' . $i . '@example.com',
                'password' => bcrypt('password'),
            ]);
            $user->save();

            $profile = new Profile([
                'user_id' => $user->id,
                'bio' => 'Bu bir örnek kullanıcı profili ' . $i,
                'avatar' => 'default-avatar.png',
            ]);
            $profile->save();

            // Kullanıcının rolünü atayın
            $user->roles()->attach(Role::where('name', 'User')->first()->id);
        }

        // Makaleler ve Yorumlar
        for ($i = 1; $i <= 5; $i++) {
            $article = new Article([
                'title' => 'Makale ' . $i,
                'content' => 'Bu bir örnek makale içeriğidir ' . $i,
            ]);
            $article->save();

            $comment = new Comment([
                'article_id' => $article->id,
                'comment_text' => 'Bu bir örnek yorumdur ' . $i,
            ]);
            $comment->save();
        }

        // Ürünler ve Kategoriler
        for ($i = 1; $i <= 5; $i++) {
            $category = new Category([
                'name' => 'Kategori ' . $i,
            ]);
            $category->save();

            for ($j = 1; $j <= 10; $j++) {
                $product = new Product([
                    'name' => 'Ürün ' . $j,
                    'price' => rand(10, 100),
                    'category_id' => $category->id,
                ]);
                $product->save();
            }
        }

        // Siparişler ve Ürünler
        for ($i = 1; $i <= 5; $i++) {
            $order = new Order();
            $order->save();
        
            // Yeni eklenen siparişin id değerini alın
            $order_id = $order->id;
        
            for ($j = 1; $j <= 3; $j++) {
                $orderItem = new OrderItem([
                    'order_id' => $order_id,
                    'product_id' => rand(1, 50), // Rastgele bir ürün ID'si
                    'quantity' => rand(1, 5),
                    'price' => rand(10, 50),
                ]);
                $orderItem->save();
            }
        }

       
    }
}
