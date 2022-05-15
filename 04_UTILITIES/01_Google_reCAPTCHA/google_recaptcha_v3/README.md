### Cara Menggunakan Google reCAPTCHA V3

- Setting [Google reCAPTCHA](https://www.google.com/recaptcha)
- Untuk Label bisa Anda isikan sesuai nama aplikasi yang Anda buat.
- reCAPTCHA type reCAPTCHA v3
- Untuk Domains bisa anda isikan sesuai nama domain anda.

### Implementasi Google reCAPTCHA V3
- Load Library Google reCHAPTCHA [https://www.google.com/recaptcha/api.js](https://www.google.com/recaptcha/api.js)
```js
    <script src="https://www.google.com/recaptcha/api.js?isi_dengan_site_key"></script>
    <script>
        grecaptcha.ready(function(){
            grecaptcha.execute('g-recaptcha-response', {
                action:'validate_recaptcha'
            }).then(function(token){
                document.getElementById('g-recaptcha-response').value = token;
            });
        });
    </script>
```
```html
<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
<input type="hidden" name="action" value="validate_recaptcha">
```

- Untuk lebih lengkapnya silahkan buka dokumentasi resmi dari 
[Google reCAPTCHA V3](https://developers.google.com/recaptcha/docs/v3)