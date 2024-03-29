# Laravel 11 Mailable 類別 Markdown 訊息

Mailable 類別 Markdown 使用 Blade 元件跟 Markdown 語法的組合，讓你可以輕鬆構建郵件訊息，同時利用 Laravel 的預製元件漂亮地渲染出漂亮且響應式的 HTML 模板，同時自動生成純文字的副本。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以登入經由 `/mail` 來進行郵件發送。

----

## 畫面截圖
![](https://i.imgur.com/xbLkRrq.png)
> 在撰寫 Markdown 郵件時不要使用過多的縮排。Markdown 解析器會將縮排的內容以程式碼區塊呈現
