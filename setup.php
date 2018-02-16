<?php
/*
 * CMS管理システム設定ファイル
 * Copyright (c) 2010-2016 by Crytus All rights reserved.
 */
// スクリプトの漢字コード（このファイルの漢字コードと一致させてください）
//define("SCRIPT_ENCODING", "SJIS");	// Shift-JISの場合先頭の'//'を取ります。
define("SCRIPT_ENCODING", "UTF-8");	// UTF-8の場合先頭の'//'を取ります。

// データベースファイルの場所と名前
$db_file = "data_fuji/f2u1j2i9c0.sqlite";
//
$mysql_db = "";
$mysql_server = "";
$mysql_id = "";
$mysql_pass = "";

// MySQL
if ($mysql_db && $mysql_server && $mysql_id && $mysql_pass) {
	$DB_URI = array(
		"db" => "mysql:dbname={$mysql_db};host={$mysql_server}",
		"user" => $mysql_id,
		"password" => $mysql_pass,
	);
}
// SQLite3
if ($db_file) {
	$DB_URI = array(
		"db" => "sqlite:" . $db_file,
		"user" => "",
		"password" => "",
	);
}

// 一覧の1ページあたりの表示件数
define("PAGE_LIMIT", 8);	// 8件

// 自動新着表示の設定
define("NEW_DAYS", 7);		// 自動新着表示の日数。現在は１週間（7）に設定。
define("NEW_AND", 1);

//-------------------------------------------------------------
// 設定
$setup = array(
	"midashi" => "登録情報",
	// 扱う情報の種類
	"bukken" => array(
		"1" => "賃貸物件",
		"6" => "購入物件",
	),
	// オプション選択肢
	"option_list" => array(
		"" => "",
		"1" => "自社管理物件",
		"2" => "ご契約済み",
		"3" => "申込中",
		"4" => "特選賃貸",
		"5" => "格安物件",
		"6" => "短期契約可能",
		"7" => "キャンペーン物件",
		"8" => "ペット可",
		"9" => "オプション9",
		"10" => "オプション10",
	),
	// こだわり条件のアイコン設定
	"icons" => array(
		"1" => array(	// 売買物件
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => "",
			"5" => "",
			"6" => "",
			"7" => "",
			"8" => "",
			"9" => "",
			"10" => "",
			"11" => "",
			"12" => "",
			"13" => "",
			"14" => "",
			"15" => "",
			"16" => "",
			"17" => "",
			"18" => "",
			"19" => "",
			"20" => "",
		),
		"2" => array(	// 賃貸物件
			"1" => "",
			"2" => "",
			"3" => "f",
			"4" => "",
			"5" => "",
			"6" => "",
			"7" => "",
			"8" => "",
			"9" => "",
			"10" => "",
			"11" => "",
			"12" => "",
			"13" => "",
			"14" => "",
			"15" => "",
			"16" => "",
			"17" => "",
			"18" => "",
			"19" => "",
			"20" => "",
		),
		"3" => array(	// 店舗物件
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => "",
			"5" => "",
			"6" => "",
			"7" => "",
			"8" => "",
			"9" => "",
			"10" => "",
			"11" => "",
			"12" => "",
			"13" => "",
			"14" => "",
			"15" => "",
			"16" => "",
			"17" => "",
			"18" => "",
			"19" => "",
			"20" => "",
		),
		"4" => array(	// 駐車場
			"1" => "icon_seichi.gif",
			"2" => "icon_3no.gif",
			"3" => "",
			"4" => "",
			"5" => "",
			"6" => "",
			"7" => "",
			"8" => "",
			"9" => "",
			"10" => "",
			"11" => "",
			"12" => "",
			"13" => "",
			"14" => "",
			"15" => "",
			"16" => "",
			"17" => "",
			"18" => "",
			"19" => "",
			"20" => "",
		),
		"5" => array(	//
			"1" => "",
			"2" => "",
			"3" => "",
			"4" => "",
			"5" => "",
			"6" => "",
			"7" => "",
			"8" => "",
			"9" => "",
			"10" => "",
			"11" => "",
			"12" => "",
			"13" => "",
			"14" => "",
			"15" => "",
			"16" => "",
			"17" => "",
			"18" => "",
			"19" => "",
			"20" => "",
		),
	),
);
//--------------------
// メール設定
$from_mail = "info@fuji-realty.asia";	// メールの送信元
$admin_mail = "info@fuji-realty.asia";	// 管理者にメールを送信する場合
$from_name = "Fuji Realty(Thailand)Co.,Ltd";	// 送信元の名称
$subject = "物件お問い合わせ";	// メールの件名
// メール文面
$pre_user = "次の通りお問い合わせを承りました";		// ユーザー宛ての前文
$post_user = "改めて担当者より回答をお送りいたしますので、しばらくお待ちください\nFujiRealty(Thailand)Co.,Ltd\nAdd:Interchange Building 399 Unit No.S6, Sukhumvit Roda,\nKlongtoey-nua, Wattana, Bangkok, 10110, Thailand\nTel:(+66)(0)2-611-2657 （タイ語・日本語・英語）\n";	// ユーザー宛ての後文
//
$pre_admin = "次の問合せがありました\n";	// 管理者宛ての前文
$post_admin = "";	// 管理者宛ての後文
$mail_sama = "様";	// 敬称
// 情報問い合わせ
$mail_item = "title,name,email,comment";
$mail_body = "■ID：{info_id}\n" .
	"■物件名称：{title}\n" .
	"■お名前：{name}\n" .
	"■メールアドレス：{email}\n" .
	"■お問い合わせ詳細：\n" .
	"{comment}\n";
// 一般問い合わせ
$mail_item2 = "name,email,comment";
$mail_body2 = "■お名前：{name}\n" .
	"■メールアドレス：{email}\n" .
	"■お問い合わせ詳細：\n" .
	"{comment}\n";
// エラーメッセージ
$error["name"] = "お名前を入力してください";
$error["email"] = "メールアドレスを入力してください";
$error["comment"] = "お問い合わせ内容を入力してください";
// ファイル終了
