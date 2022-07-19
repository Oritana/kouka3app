<?php
namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kouka3Controller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();                              /* Personモデルがpeopleテーブルに対応している */
        $param = ['input' => '','items' => $items];          /* peopleテーブルの全レコード取得し、$itemに入れる */
        return view('kouka3.index', $param);                 /* 'items'でテンプレート$itemsに渡し、全データ表示 */
    }

    public function show(Request $request)
    {
        $item = Person::where('id',$request->id)->first();  /* whereで検索の条件を設定、firstを使ってレコードを取得 */
        return view('kouka3.show', ['item' => $item]);
    }

    public function add(Request $request)
    {
        return view('kouka3.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,Person::$rules);   /* バリデーションの実行 */
        $person = new Person;                       /* Personインスタンスの作成 */
        $form = $request->all();                    /* 値を用意 */
        unset($form['_token']);                     /* フォームに追加される非常時フィールド[_token]だけはunsetで削除 */
        $person->fill($form)->save();               /* インスタンスに値を設定して保存 */
        return redirect('/kouka3');
    }
    public function edit(Request $request)
    {
        $item = Person::find($request->id);
        return view('kouka3.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);   /* バリデーションの実行 */
        $person = Person::find($request->id);        /* モデルのfindメソッドで更新するモデルを取得 */
        $form = $request->all();                     /* 値を用意 */
        unset($form['_token']);                      /* フォームに追加される非常時フィールド[_token]だけはunsetで削除 */
        $person->fill($form)->save();                  /* インスタンスに値を設定して保存 */
        return redirect('/kouka3');
    }



    public function del(Request $request)
    {
        $item = Person::find($request->id);                /* Person::findで検索したモデルをそのまま変数'$item'にしてテンプレートに渡す */
        return view('kouka3.del', ['item' => $item]);      
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();              /* 指定のIDモデルを検索し、モデルのdeleteを呼び出し削除 */
        return redirect('/kouka3');
    }

}