<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Translation\PotentiallyTranslatedString;

class GoogleCaptchaV3 implements ValidationRule
{



     public function __construct(private ?string $action=null , private ?float $minScore=null){

     }


    /**
     * Run the validation rule.
     *
     * @param  Closure(string, ?string=): PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //

        $siteVerify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify',[

            'secret' =>config('services.google_recaptcha_v3.site_key'),
            'response' => $value,

           


        ]);
        //  dd($siteVerify);




              if ($siteVerify->failed()) {
            $fail('بعداً تلاش کنید ........');
            return;
        }

        $body = $siteVerify->json();

        // اعتبارسنجی توسط گوگل رد شده
        if (($body['success'] ?? false) !== true) {
            $fail('اعتبارسنجی شما توسط گوگل رد شد، لطفاً مجدد تلاش کنید.');
            return;
        }

        // بررسی action
        if (
            $this->action !== null &&
            ($body['action'] ?? null) !== $this->action
        ) {
            $fail('اکشن فرم با اکشن گوگل یکی نیست.');
            return;
        }

        // بررسی score
        if (
            $this->minScore !== null &&
            ($body['score'] ?? 0) < $this->minScore
        ) {
            $fail('امتیاز شما از سمت گوگل پایین‌تر از حد مجاز است.');
            return;
        }


    }
}