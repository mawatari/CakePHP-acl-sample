CakePHP ACL Sample
==================



Usage
-----

### 1. テーブルの作成
CLIで、以下のコマンドを実行

`cake Migrations.migration run all`



### 2. グループとユーザの作成
グループとユーザを追加する前に、一時的にログインなしで全てのアクションにアクセスできるように設定

```
class AppController extends Controller {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}
}
```

Webブラウザで、`/groups/add`, `/users/add`にアクセスして、グループとユーザをいくつか追加  
`aros`テーブルにも、同時にレコードをできていることが確認できる



### 3. ACOの生成
Webブラウザで、`/admin/acl`にアクセスして、[Actions]タブの[Synchronize actions ACOs]に移動し、Synchronizeを実行  
（[Build actions ACOs]に移動し、Buildを実行しても同様の結果を得られる）

`acos`テーブルに、全てのアクションメソッドが登録されていることが確認できる



### 4. 権限設定
[Permissions]タブの[Roles Permissions]に移動し、権限を設定する

（今回は、ユーザ単位での権限管理はしないように設定しているので、[Users roles]でエラーが表示されるのは正常な動作）



Release notes
-------------

- 2013/12/20 v1.0

