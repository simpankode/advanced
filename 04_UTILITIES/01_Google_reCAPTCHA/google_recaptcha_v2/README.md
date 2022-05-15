### Cara Menggunakan Google reCAPTCHA V2

- Setting [Google reCAPTCHA](https://www.google.com/recaptcha)
- Untuk Label bisa Anda isikan sesuai nama aplikasi yang Anda buat.
- reCAPTCHA type reCAPTCHA v2 "I'm not a robot" Checkbox
- Untuk Domains bisa anda isikan sesuai nama domain anda.

### Implementasi Google reCAPTCHA V2
- Load Library Google reCHAPTCHA [https://www.google.com/recaptcha/api.js](https://www.google.com/recaptcha/api.js)
```html
<!-- Load Library Google reCaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>
```
```html
<!-- client-side-integration -->
<div class="g-recaptcha" data-sitekey="isi_dengan_site_key"></div>
```

```php
//server-side-integration
$secret_key = "isi_dengan_secret_key";
```

- Untuk lebih lengkapnya silahkan buka dokumentasi resmi dari 
[Google reCAPTCHA V2](https://developers.google.com/recaptcha/docs/display)