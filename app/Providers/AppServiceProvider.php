<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

//        حتماً. این خط در لاراول خیلی مهمه، مخصوصاً اگر با MySQL و نسخه‌های قدیمی‌تر یا تنظیمات خاص دیتابیس کار کنی.
//    وقتی من یک ستون string می‌سازم و طولش رو مشخص نکردم، طول پیش‌فرضش رو 191 کاراکتر در نظر بگیر.
//    $table->string('name');
//        در حالت معمول Laravel این رو به چیزی شبیه این تبدیل می‌کنه:
//        VARCHAR(255)
//            Laravel طول پیش‌فرض string رو به 191 کاهش می‌ده:
//        دلیلش بیشتر به MySQL و Index مربوط می‌شه.
//
//    در بعضی نسخه‌ها/تنظیمات قدیمی MySQL، وقتی از utf8mb4 استفاده می‌کردیم، یک ستون:
//        VARCHAR(255)
//            Specified key was too long; max key length is 767 bytes

        Schema::defaultStringLength(191);





    }
}
