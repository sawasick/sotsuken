# DBファイル(sql)について

### ローカルDBを本番にダンプ
1. [phpMyAdmin](http://localhost:8888/phpMyAdmin/)でエクスポート
2. [dbrep](http://localhost:8888/dbrep/)にアクセス
3. 下記のように置き換え

| Search→ | Replace
| :-: | :-: |
| http://localhost:8888 | http://sotsuken.site |
| 卒制・卒研サイト_ローカル | 卒制・卒研サイト |

4. vscode(エディタ)でsqlファイルを開いて、下記のように置き換え
```
CHARSET=utf8mb4 → CHARSET=utf8

 COLLATE utf8mb4_unicode_520_ci →削除(先頭に空白あり)

 COLLATE=utf8mb4_unicode_520_ci →削除(先頭に空白あり)
```

5. 本番のphpMyAdminでインポート
6. [dbrep](http://localhost:8888/dbrep/)に戻り、入力した値を入れ替えて再度エクスポート
7. 6.でエクスポートしたファイルをdatabaseフォルダに保存しコミットする