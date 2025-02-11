<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class Post
{
    public static function findAll()
    {
        return [[
            'id' => 1,
            'articleTitle' => 'Bahaya Judol',
            'author' => 'Arindan Aditiya',
            'body' => " <h2>Bahaya Judi: Mengapa Harus Dihindari?</h2>
    
        <p>Judi sering dianggap sebagai hiburan atau cara cepat untuk mendapatkan uang. Namun, di balik itu semua, judi menyimpan berbagai risiko yang dapat merusak kehidupan seseorang, baik secara finansial, mental, maupun sosial. Banyak orang yang awalnya hanya sekadar coba-coba, tetapi akhirnya terjebak dalam lingkaran kecanduan yang sulit dihentikan.</p>
    
        <p>Berikut beberapa alasan mengapa judi bisa sangat merugikan dan sebaiknya dihindari:</p>
    
        <ul>
            <li><strong>Ketagihan</strong><br>
                Judi memiliki efek adiktif yang mirip dengan narkoba. Ketika seseorang menang, ia merasa senang dan ingin menang lebih banyak. Namun, ketika kalah, ia merasa terpacu untuk mencoba lagi dengan harapan bisa mengembalikan uang yang hilang. Siklus ini bisa berlangsung terus-menerus hingga akhirnya berubah menjadi kecanduan yang sulit dihentikan.</li>
            
            <li><strong>Kerugian Finansial</strong><br>
                Judi bukanlah cara cepat untuk mendapatkan uang, tetapi justru jalan cepat menuju kebangkrutan. Mayoritas pemain judi lebih sering kalah daripada menang, karena sistem dalam perjudian memang dibuat agar rumah (kasino atau bandar) selalu memiliki keuntungan lebih besar. Banyak orang kehilangan tabungan, aset, bahkan harus berhutang hanya untuk terus berjudi.</li>
            
            <li><strong>Masalah Keluarga</strong><br>
                Pecandu judi sering kali mengabaikan keluarganya demi menghabiskan waktu dan uang untuk berjudi. Banyak kasus di mana seseorang rela menggadaikan harta keluarga, berbohong, atau bahkan mencuri demi mendapatkan uang untuk berjudi. Akibatnya, hubungan keluarga menjadi rusak, timbul pertengkaran, bahkan perceraian.</li>
            
            <li><strong>Gangguan Mental dan Emosional</strong><br>
                Kecanduan judi tidak hanya berdampak pada keuangan, tetapi juga pada kesehatan mental. Stres akibat kekalahan terus-menerus, perasaan bersalah karena kehilangan uang, dan tekanan untuk terus bermain bisa menyebabkan kecemasan, depresi, dan bahkan pikiran untuk bunuh diri. Banyak pecandu judi yang merasa terjebak dan kehilangan harapan dalam hidup.</li>
            
            <li><strong>Terjerat Hutang dan Kriminalitas</strong><br>
                Karena kehilangan banyak uang, banyak penjudi yang akhirnya berhutang kepada rentenir atau orang-orang di sekitarnya. Tidak jarang mereka juga terlibat dalam tindakan kriminal seperti pencurian, penipuan, atau pemalsuan hanya untuk mendapatkan uang demi melanjutkan kebiasaannya. Banyak kasus di mana pecandu judi akhirnya masuk penjara atau mengalami kekerasan akibat hutang yang menumpuk.</li>
        </ul>
    
        <p>Kesimpulannya, judi bukanlah solusi untuk mencari uang atau menghilangkan stres. Justru, judi bisa membawa dampak buruk yang menghancurkan hidup seseorang. Lebih baik manfaatkan waktu dan uang untuk hal-hal yang lebih positif dan bermanfaat. 🚫🎲</p>"
        ],[
            'id' => 2,
            'articleTitle' => 'Bahaya Buaya',
            'author' => 'Ahmad kasimi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur aliquid quos autem aperiam ratione nisi dignissimos fugiat obcaecati? Corporis magnam distinctio provident, necessitatibus error quo recusandae cumque consequatur adipisci ipsa officiis mollitia enim sed libero perspiciatis molestias dolorum ad reprehenderit, quaerat consectetur? Cumque amet est voluptates non aliquid veritatis nulla repellendus quisquam architecto ipsum quae error quis nam labore fuga tempore, ratione adipisci eligendi asperiores id, dignissimos numquam facilis? Ullam corrupti, repudiandae alias magni unde aut et natus quibusdam.'
        ]];
    }

    public static function findOne($id):array
    {

        // menggunakan arrow
        // return Arr::first(static::findAll(), fn($post) => $post["id" == $id]);

        // menggunakan callback
        $post = Arr::first(static::findAll(), function($post) use ($id){
            return $post['id'] == $id;
        });

        if(! $post){
            abort(404);
        }

        return $post;

    }
}
