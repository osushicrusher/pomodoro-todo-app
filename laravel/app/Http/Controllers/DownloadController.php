<?php

namespace App\Http\Controllers;

use App\Download;
use App\User;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      try {
        // csv形式で情報をファイルに出力するための準備
        $csvFileName = '/tmp/' . time() . rand() . '.csv';
        $fileName = time() . rand() . '.csv';
        $res = fopen($csvFileName, 'w');
        if($res === FALSE) {
          throw new Exception('ファイルの書き込みに失敗しました。');
        }

        $columns = ['id', 'name', 'email', 'remember_token', 'created_at', 'updated_at', 'is_admin', 'icon', 'user_name'];

        // 項目名先に出力
        fputcsv($res, $columns);

        // 全ユーザー取得
        $users = User::get()->toArray();

        // ループしながら出力
        foreach($users as $userInfo) {
          // 文字コード変換。エクセルで開けるようにする。
          mb_convert_variables('SJIS', 'UTF-8', $userInfo);

          // ファイルに書き出しをする
          fputcsv($res, $userInfo);
        }

        // ファイルを閉じる
        fclose($res);

        // ファイルタイプ(CSV)
        header('Content-Type: application/octet-stream');

        // ファイル名
        header('Content-Disposition: attachment; filename=' . $fileName);

        // ファイルサイズ ダウンロード の進捗状況が表示
        header('Content-Length: ' . filesize($csvFileName));
        header('Content-Transfer-Encoding: binary');

        //ファイルを出力する
        readfile($csvFileName);

        // 出力するために作成した/tmp/にあるファイルを削除
        unlink($csvFileName);

      } catch(Exception $e) {
        echo $e->getMessage();
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $users = [
        [
          'id' => 1,
          'name' => 'Aさん',
          'email' => 'aaa@a.com',
          'password' => 'aaaaa'
        ],
        [
          'id' => 2,
          'name' => 'Bさん',
          'email' => 'bbb@b.com',
          'password' => 'bbbbb'
        ],
        [
          'id' => 3,
          'name' => 'Cさん',
          'email' => 'ccc@c.com',
          'password' => 'ccccc'
        ]
        ];
        ddd($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        //
    }
}
