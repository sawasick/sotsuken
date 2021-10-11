# DBファイル(sql)について

### ローカルDBを本番にダンプ
1. [dbrep](http://localhost:8004/dbrep/)にアクセス
---
2. Database Detailsは以下のようにする
   -  database name → sawasick_w1_local
   -  username → root
   -  pass → root
   -  host → localhost
   -  port →空欄
---
3. 下記のように置き換え
  - Search → Replace
  - http://localhost:8004 → http://sotsuken.site
  - 卒制・卒研サイト_ローカル → 卒制・卒研サイト
---
4. エクスポート
---
5. vscode(エディタ)でsqlファイルを開いて、下記のように置き換え
```
CHARSET=utf8mb4 → CHARSET=utf8

 COLLATE utf8mb4_unicode_520_ci →削除(先頭に空白あり)

 COLLATE=utf8mb4_unicode_520_ci →削除(先頭に空白あり)
```
---
6. 本番のphpMyAdminでインポート
---
7. [dbrep](http://localhost:8004/dbrep/)に戻り、入力した値を入れ替えて再度エクスポート
---
8. 7.でエクスポートしたファイルをdatabaseフォルダに保存しコミットする