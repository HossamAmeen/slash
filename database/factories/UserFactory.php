<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;






$factory->define(App\Models\User::class, function (Faker $faker) {

    return [
        'user_name' => $faker->name,
        'full_name' => $faker->name,
        'password' => '$2y$10$mXwEFI/nQub9PmCejn59zuozRujElm4bu5D01y.wXpciRnKjHRWNm', // admin
        'email' => Str::random(10). $faker->email,
        'role' => $faker->randomElement($array = range (0,1))
    ];
});
$factory->define(App\Models\Configration::class, function (Faker $faker) {
    return [
        "ar_title"=> "سلاش", 
        "title"=> "slash",
        "ar_about_us" => "نحن مجموعة من الشباب نعمل تحت مظلة واحدة تسمح للجميع بالتجربة والحصول على أفضل النتائج في ظل نظام
        إداري حديث يساوي الموظفين بالعملاء. نتطلع إلى أن نكون أكبر شركة عربية في هذا المجال وأن نغزو السوق الخارجية،
        وفقًا لتجربتنا وفكرناالمتجدد دائمًا. نظرًا لأن الويب قادر بسهولة على استيعاب الوسائط مثل الصوت والصور والفيديو وكذلك
        النص. ظهرت مواقع
        اجتماعية تدعم هذه الوسائط.قادر بسهولة على استيعاب الوسائط مثل الصوت والصور والفيديو وكذلك النص.
        ظهرت مواقع اجتماعية تدعم
        هذه الوسائط.",
        "about_us" => "We are a group of youth working under one umbrella it allows everyone to experiment and get the
        best results under a
        modern administrative system that equates employees with customers. We look forward to being the
        largest Arab company in
        this field and conquer the foreign market, according to our experience and our renewed thought
        always. Since the web is
        easily able to accommodate media such as audio, images and video as well as text. social sites
        supporting these media
        have emerged.",
        "slide_description" => "Welcome to slash for marketing and programming services",
        "ar_slide_description" => "مرحبا بك في سلاش",
        "description"=>"شيسشسيشسيشسيشس" ,
        "en_description"=>"slash Marketing and Programming Services Company provides a complete service in the field of marketing, software and business management. Through a distinguished team and more than 6 years of experience serving more than 300 clients",
        "projects_counter"=>60,  
        "experience_year_counter"=>8,
        "address" =>"Al-Assal Street from Al-Gomhoria Street, Assiut",
        "ar_address" => "الجمهوريه - اسيوط",
        'email' => $faker->safeEmail,
        'youtube' =>"https://www.youtube.com" ,
        "behance" =>"https://www.behance.net/", 
        "company_profile"=> "https://www.behance.net/" ,
        "Visual_identity_samples"=>"https://www.behance.net/", 
        'facebook' => "https://www.facebook.com/",
        "linkedin"=> "linkedin.com",
        "whatsapp" => "01010079798",
        'twitter' => "https://twitter.com/",
        'instagram' => "https://www.instagram.com/",
        "google_play_link" =>"https://play.google.com/store/apps",
        "location"=> "", 
        'phone' => "01010079795",
        'phone2' => "01010079795",
        'job_form_link' => "https://www.google.com/forms/about/",
        'training_course_count'=>30,
        'trainee_count'=> 100,
        'user_id' =>1 ,
    ];
});
$factory->define(App\Models\Service::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        'description' => $faker->text,
        'ar_description' => $faker->text."عربي",
        "item_order" => 1,
        'color'=> $faker->randomElement(array("#00ff40", "#30ff10", "#10ff40")),
        "user_id" => 1
    ];
});
$factory->define(App\Models\Client::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        "item_order" => 1,
        "user_id" => 1
    ];
});
$factory->define(App\Models\ClientReview::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        'description' => substr($faker->text, 0, 30),
        'ar_description' =>  substr($faker->text."عربي", 0, 30),
        "item_order" => 1,
        'field_id'=>$faker->randomElement(range(1,10)),
        "user_id" => 1
    ];
});
$factory->define(App\Models\Employee::class, function (Faker $faker) {
    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        'postion'=> $faker->randomElement($array = ['Lead','Designer']),
        'ar_postion'=>$faker->randomElement($array = ['المدير التنفيذي','مصمم']),
        "item_order" => 1,
        "user_id" => 1
    ];
});
$factory->define(App\Models\Field::class, function (Faker $faker) {

    return [
        'name'=> $faker->name ,
        'ar_name' => $faker->name . "عربي",
        "item_order" => 1,
        "user_id" => 1
    ];
});
$factory->define(App\Models\Gallery::class, function (Faker $faker) {
    return [
        'path'=>" ",
        "item_order" => 1,
        'user_id' =>1 ,
        
    ];
});
$factory->define(App\Models\Job::class, function (Faker $faker) {

    return [
        "item_order" => 1,
        'name'=> $faker->name ,
        'ar_name'=> $faker->name. "عربي" ,
        'type' => $faker->randomElement(['ذكر', 'انثي']),
        "user_id" => 1
    ];
});
$factory->define(App\Models\LastWork::class, function (Faker $faker) {

    return [
        "item_order" => 1,
        'name'=> $faker->name ,
        'ar_name'=> $faker->name. "عربي" ,
        'type' => $faker->randomElement(['web', 'branding']),
        "user_id" => 1
    ];
});