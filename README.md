# Laravel+Vue.js : vuebnb
# laravel_vue_no_vuex

１）バージョン指定でlaravelプロジェクトを作成
composer create-project "laravel/laravel=5.4.*" projectname

2)パーミッションの設定
chmod 777 -R storage
chmod 777 ./bootstrap/cache/

2)参考サイトのようにVue.jsフレームワークを導入
https://qiita.com/fruitriin/items/e0f2c9aa035c3ff2c874
https://qiita.com/acro5piano/items/f33381fc60408abe9865

3)データベースの作成はCharsetに要注意
CREATE DATABASE example CHARACTER SET utf8mb4

4)config/database.php -> strictをfalseに。

3)npm run watch
で監視

4)サーバー上のバーチャルホストで/publicフォルダをDocumentRootに指定する

4)npm run dev
webback.mix.jsに必要な設定を書いた後に
npm run devでscssからcss、全てくっついたコンパクトなjsファイルが作成される。

# GIT

1)Branchの作成
git checkout -b branchname

2)Branchの一覧 
git branch -a

3)Branchを変更
git checkout branchname

4)元のBranchに戻る
git checkout master


