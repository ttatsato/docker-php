# APIなしでphpとvueを使ってみる(共有用)

## ソースコードをgit hub から持ってくる git clone
```
git clone https://github.com/ttatsato/docker-php.git
```

## docker-compose up

```$xslt
cd docker-php
git checkout -b php-vue
git pull origin php-vue
docker-compose up -d
```

## ローカルサーバーにアクセス
http://localhost:8080/

# 画面処理とバックの処理を綺麗に分けよう

フロントエンドをphpとjsで書くことは可能だけど、ソースが汚れる。

