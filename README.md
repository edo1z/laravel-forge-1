## Mail Queue Demo

このデモでは、Laravelのキュー機能を使用してメールを送信する方法を示します。

### 機能概要

- トップページに「MailQueue」リンクを追加。
- `MailQueue`コントローラを作成。
- トップページのリンクをクリックすると、`MailQueue`の`index`に遷移。
- `index`には送信先メールアドレスと内容を入力するフォームと送信ボタンがある。
- 送信ボタンを押すとPOSTで、`MailQueue`の`sendMail`が実行される。
- `sendMail`関数では、`SendMailJob`がdispatchされる。
- `SendMailJob`では、5秒間停止した後に、送信先メールアドレス宛に内容を送信する。