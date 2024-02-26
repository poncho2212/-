<?php

/*
    SiteController
*/

class SiteController extends BaseController {
    // メニュー
    public function run() {
        // セッション開始
        $this->sess = new Session();
        $this->sess->set_sesskey(_SITE_INFO);
        $this->sess->set_sessname(_SITE_SESSNAME);
        $this->sess->start();

        switch ($this->type) {
            case "detail":
                $this->screen_detail();
                break;
            case "regist":
                $this->screen_regist();
                break;
            case "modify":
                $this->screen_modify();
                break;
            case "delete":
                $this->screen_delete();
                break;
            default:
                $this->screen_list();
        }
    }

    // キャンプ場一覧画面
    private function screen_list(){
        $disp_search_key = "";
        $sql_search_key = "";
        // セッション変数の処理
        unset($_SESSION[_SITE_INFO]);
        if(isset($_POST['search_key']) && $_POST['search_key'] != ""){
            unset($_SESSION['pageID']);
            $_SESSION['search_key'] = $_POST['search_key'];
            $disp_search_key = htmlspecialchars($_POST['search_key'], ENT_QUOTES);
            $sql_search_key = $_POST['search_key'];
        }else{
            if(isset($_POST['submit']) && $_POST['submit'] == "検索する"){
                unset($_SESSION['search_key']);
            }else{
                if(isset($_SESSION['search_key'])){
                    $disp_search_key = htmlspecialchars($_SESSION['search_key'], ENT_QUOTES);
                    $sql_search_key = $_SESSION['search_key'];
                }
            }
        }

        $SiteModel = new SiteModel();
        list($data, $count) = $SiteModel->get_site_list($sql_search_key);
        list($data, $links) = $this->make_page_link($data);

        $this->view->assign('count', $count);
        $this->view->assign('data', $data);
        $this->view->assign('search_key', $disp_search_key);
        $this->view->assign('links', $links['all']);
        $this->title = 'キャンプ場一覧';
        $this->file = 'list.tpl';
        $this->view_display();
    }


    // キャンプ場詳細画面
    public function screen_detail(){
        $this->file = "siteinfo.tpl";

        $SiteModel = new SiteModel();
        if ($this->action == "confirm") {
            $_SESSION[_SITE_INFO] = $SiteModel->get_site_data_id($_GET['id']);
            // 画像データがある場合のみBase64エンコードしてセッションに格納
            if (!empty($_SESSION[_SITE_INFO]['s_image'])) {
                $imageData = $_SESSION[_SITE_INFO]['s_image'];
                // 画像データがBase64エンコードされているかどうかを確認
                if (base64_encode(base64_decode($imageData, true)) === $imageData) {
                    $_SESSION[_SITE_INFO]['s_image'] = $imageData;
                } else {
                    // 画像データがBase64エンコードされていない場合、ここでBase64エンコードする
                    $imageData = base64_encode($imageData);
                    $_SESSION[_SITE_INFO]['s_image'] = $imageData;
                }
            }
        }

        // フォームの初期値=選択されたキャンプ場の詳細情報
        $this->form->addDataSource(new HTML_QuickForm2_DataSource_Array(
            [
                'sitename' => $_SESSION[_SITE_INFO]['sitename'],
                'ken' => $_SESSION[_SITE_INFO]['ken'],
                'fees' => $_SESSION[_SITE_INFO]['fees'],
                'required_time' => $_SESSION[_SITE_INFO]['required_time'],
                'cancel' => $_SESSION[_SITE_INFO]['cancel'],
                'nature' => $_SESSION[_SITE_INFO]['nature'],
                'cleanliness_restrooms' => $_SESSION[_SITE_INFO]['cleanliness_restrooms'],
                'bidet' => $_SESSION[_SITE_INFO]['bidet'],
                'showers' => $_SESSION[_SITE_INFO]['showers'],
                'shop' => $_SESSION[_SITE_INFO]['shop'],
                'ice_vending' => $_SESSION[_SITE_INFO]['ice_vending'],
                'drinking' => $_SESSION[_SITE_INFO]['drinking'],
                'garbage' => $_SESSION[_SITE_INFO]['garbage'],
                'parking' => $_SESSION[_SITE_INFO]['parking'],
                'space' => $_SESSION[_SITE_INFO]['space'],
                'check_in' => $_SESSION[_SITE_INFO]['check_in'],
                'check_out' => $_SESSION[_SITE_INFO]['check_out'],
                'comment' => $_SESSION[_SITE_INFO]['comment'],
                'link' => $_SESSION[_SITE_INFO]['link'],
                's_image' => $_SESSION[_SITE_INFO]['s_image'],
            ]
        ));  
        
        $this->make_form_controle();

        // フォームの妥当性検証
        if (!$this->form->validate()) {
            $this->action = "confirm";
        }

        if($this->action == "confirm"){
            $this->title = 'キャンプ場詳細';
            $this->next_type = 'detail';
            $this->next_action = 'comfirm';
            $this->form->toggleFrozen(true);
        }

        $this->form->addElement('submit', 'submit', ['value' =>'']);
        $this->form->addElement('submit', 'submit2', ['value' =>'']);
        $this->form->addElement('reset', 'reset', ['value' =>'']);
        $this->view->assign('id', $_SESSION[_SITE_INFO]['id']);
        $this->view->assign('link', $_SESSION[_SITE_INFO]['link']);
        $this->view->assign('image_data', $_SESSION[_SITE_INFO]['s_image']);
        $this->view_display();
    }


    // サイトの新規登録画面
    public function screen_regist()
    {
        $btn = "";
        $btn2 = "";
        $btn3 = "";
        $this->file = "siteinfo.tpl";

        $this->make_form_controle();

        // フォームの妥当性検証
        if (!$this->form->validate()) {
            $this->action = "form";
        }

        if ($this->action == "form") {
            $this->title = '新規登録';
            $this->next_type = 'regist';
            $this->next_action = 'confirm';
            $btn = '確認画面へ';
        } else {
            if ($this->action == "confirm") {
                // ファイルがアップロードされたかチェック
                if (isset($_FILES['s_image']) && isset($_FILES['s_image']['tmp_name']) && is_uploaded_file($_FILES['s_image']['tmp_name'])) {
                    $maxFileSize = 0.7 * 1024 * 1024; // 0.7MBをバイト単位で表現
                    if ($_FILES['s_image']['size'] > $maxFileSize) {
                        $this->title = '新規登録';
                        $this->next_type = 'regist';
                        $this->next_action = 'confirm';
                        $btn = '確認画面へ';
                        $this->f_message = "ファイルサイズが制限を超えています。";
                        unset($_FILES['s_image']); // ファイルを削除
                    } else {
                        // ファイルのBase64エンコードをテンプレートに渡す
                        $imageData = base64_encode(file_get_contents($_FILES['s_image']['tmp_name']));
                        $_SESSION['image'] = $imageData;
                        $this->title = '確認';
                        $this->next_type = 'regist';
                        $this->next_action = 'complete';
                        $this->form->toggleFrozen(true);
                        $btn = '登録する';
                        $btn2 = '戻る';
                    }
                } else {
                    unset($_SESSION['image']);
                    $this->title = '確認';
                    $this->next_type = 'regist';
                    $this->next_action = 'complete';
                    $this->form->toggleFrozen(true);
                    $btn = '登録する';
                    $btn2 = '戻る';
                }
            } else {
                if ($this->action == "complete" && isset($_POST['submit2']) && $_POST['submit2'] == '戻る') {
                    $this->title = '新規登録';
                    $this->next_type = 'regist';
                    $this->next_action = 'confirm';
                    $btn = '確認画面へ';
                } else {
                    if ($this->action == "complete" && isset($_POST['submit']) && $_POST['submit'] == '登録する') {
                        $SiteModel = new SiteModel();
                        $userdata = $this->form->getValue();
                        if ($SiteModel->check_sitename($userdata)) {
                            $this->title = '新規登録';
                            $this->message = "このサイトは登録済みです。";
                            $this->next_type = 'regist';
                            $this->next_action = 'confirm';
                            $btn = '確認画面へ';
                        } else {
                            $imageData = $_SESSION['image'];
                            if(isset($imageData)){
                                $userdata['s_image'] = $imageData;
                                unset($_SESSION['image']);
                            }
                            $SiteModel->regist_member($userdata);
                            $this->title = '登録完了';
                            $this->message = "登録を完了しました。";
                            $this->file = "message.tpl";
                        }
                    }
                }
            }
        }

        $this->form->addElement('submit', 'submit', ['value' =>$btn]);
        $this->form->addElement('submit', 'submit2', ['value' =>$btn2]);
        $this->form->addElement('submit', 'submit3', ['value' =>$btn3]);//画像削除ボタン
        $this->form->addElement('reset', 'reset', ['value' =>'取り消し']);
        $this->view->assign('image_data', $imageData);
        $this->view_display();
    }
    

    // サイト情報更新画面
    public function screen_modify()
    {
        $btn = "";
        $btn2 = "";
        $btn3 = "";
        $this->file = "siteinfo.tpl";

        $SiteModel = new SiteModel();
        if ($this->action == "form") {
            $_SESSION[_SITE_INFO] = $SiteModel->get_site_data_id($_GET['id']);
            // 画像データがある場合のみBase64エンコードしてセッションに格納
            if (!empty($_SESSION[_SITE_INFO]['s_image'])) {
                $imageData = $_SESSION[_SITE_INFO]['s_image'];
                // 画像データがBase64エンコードされているかどうかを確認
                if (base64_encode(base64_decode($imageData, true)) === $imageData) {
                    $_SESSION[_SITE_INFO]['s_image'] = $imageData;
                } else {
                    // 画像データがBase64エンコードされていない場合、ここでBase64エンコードする
                    $imageData = base64_encode($imageData);
                    $_SESSION[_SITE_INFO]['s_image'] = $imageData;
                }
            }
        }
        
        $this->form->addDataSource(new HTML_QuickForm2_DataSource_Array(
            [
                'sitename' => $_SESSION[_SITE_INFO]['sitename'],
                'ken' => $_SESSION[_SITE_INFO]['ken'],
                'fees' => $_SESSION[_SITE_INFO]['fees'],
                'required_time' => $_SESSION[_SITE_INFO]['required_time'],
                'cancel' => $_SESSION[_SITE_INFO]['cancel'],
                'nature' => $_SESSION[_SITE_INFO]['nature'],
                'cleanliness_restrooms' => $_SESSION[_SITE_INFO]['cleanliness_restrooms'],
                'bidet' => $_SESSION[_SITE_INFO]['bidet'],
                'showers' => $_SESSION[_SITE_INFO]['showers'],
                'shop' => $_SESSION[_SITE_INFO]['shop'],
                'ice_vending' => $_SESSION[_SITE_INFO]['ice_vending'],
                'drinking' => $_SESSION[_SITE_INFO]['drinking'],
                'garbage' => $_SESSION[_SITE_INFO]['garbage'],
                'parking' => $_SESSION[_SITE_INFO]['parking'],
                'space' => $_SESSION[_SITE_INFO]['space'],
                'check_in' => $_SESSION[_SITE_INFO]['check_in'],
                'check_out' => $_SESSION[_SITE_INFO]['check_out'],
                'comment' => $_SESSION[_SITE_INFO]['comment'],
                'link' => $_SESSION[_SITE_INFO]['link'],
                's_image' => $_SESSION[_SITE_INFO]['s_image'],
            ]
        ));

        $this->make_form_controle();

        // フォームの妥当性検証
        if (!$this->form->validate()) {
            $this->action = "form";
        }

        if ($this->action == "form") {
            $this->title = '更新';
            $this->next_type = 'modify';
            $this->next_action = 'confirm';
            $btn = '確認画面へ';
            //画像が保存されている場合のみ削除ボタンを表示
            if(isset($_SESSION[_SITE_INFO]['s_image'])){
                $btn3 = '画像削除';
            }
        } else {
            if ($this->action == "confirm") {
                if(isset($_POST['submit3']) && $_POST['submit3'] == '画像削除' && isset($_SESSION[_SITE_INFO]['s_image'])){
                    $_SESSION[_SITE_INFO]['s_image'] = NULL;
                    $this->title = '更新';
                    $this->next_type = 'modify';
                    $this->next_action = 'confirm';
                    $btn = '確認画面へ';
                    $btn3 = '';
                }else if (isset($_FILES['s_image']) && isset($_FILES['s_image']['tmp_name']) && is_uploaded_file($_FILES['s_image']['tmp_name'])) {
                // ファイルがアップロードされたかチェック
                    $maxFileSize = 0.7 * 1024 * 1024; // 0.7MBをバイト単位で表現
                    if ($_FILES['s_image']['size'] > $maxFileSize) {
                        $this->title = '更新';
                        $this->next_type = 'modify';
                        $this->next_action = 'confirm';
                        $btn = '確認画面へ';
                        if(isset($_SESSION[_SITE_INFO]['s_image'])){
                            $btn3 = '画像削除';
                        }
                        $this->f_message = "ファイルサイズが制限を超えています。";
                        unset($_FILES['s_image']); // ファイルを削除
                    } else {
                        // ファイルのBase64エンコードをテンプレートに渡し、セッションに保存
                        $imageData = base64_encode(file_get_contents($_FILES['s_image']['tmp_name']));
                        $_SESSION[_SITE_INFO]['s_image'] = $imageData;
                        $this->title = '確認';
                        $this->next_type = 'modify';
                        $this->next_action = 'complete';
                        $this->form->toggleFrozen(true);
                        $btn = '更新する';
                        $btn2 = '戻る';
                    }
                } else {
                    $this->title = '確認';
                    $this->next_type = 'modify';
                    $this->next_action = 'complete';
                    $this->form->toggleFrozen(true);
                    $btn = '更新する';
                    $btn2 = '戻る';
                }
            } else {
                if ($this->action == "complete" && isset($_POST['submit2']) && $_POST['submit2'] == '戻る') {
                    $this->title = '更新';
                    $this->next_type = 'modify';
                    $this->next_action = 'confirm';
                    $btn = '確認画面へ';
                    if(isset($_SESSION[_SITE_INFO]['s_image'])){
                        $btn3 = '画像削除';
                    }
                } else {
                    if ($this->action == "complete" && isset($_POST['submit']) && $_POST['submit'] == '更新する') {
                        $userdata = $this->form->getValue();
                        if (($SiteModel->check_sitename($userdata))
                            && ($_SESSION[_SITE_INFO]['sitename'] != $userdata['sitename'])
                        ) {
                            $this->next_type = 'modify';
                            $this->next_action = 'confirm';
                            $this->title = '更新';
                            $this->message = "このサイトは登録済みです。";
                            $btn = '確認画面へ';
                            if(isset($_SESSION[_SITE_INFO]['s_image'])){
                                $btn3 = '画像削除';
                            }
                        } else {
                            $this->title = '更新完了';
                            $userdata['id'] = $_SESSION[_SITE_INFO]['id'];
                            $userdata['s_image'] = $_SESSION[_SITE_INFO]['s_image'];
                            $SiteModel->modify_site($userdata);
                            $this->message = "サイト情報を修正しました。";
                            $this->file = "message.tpl";
                            unset($_SESSION[_SITE_INFO]);
                        }
                    }
                }
            }
        }
        
        $this->form->addElement('submit', 'submit', ['value' =>$btn]);
        $this->form->addElement('submit', 'submit2', ['value' =>$btn2]);
        $this->form->addElement('reset', 'reset', ['value' =>'取り消し']);
        $this->form->addElement('submit', 'submit3', ['value' =>$btn3]);//画像削除ボタン
        if(isset($_SESSION[_SITE_INFO]['link'])){
            $this->view->assign('link', $_SESSION[_SITE_INFO]['link']);
        }else{
            $this->view->assign('link', '');
        }
        if(isset($_SESSION[_SITE_INFO]['s_image'])){
            $this->view->assign('image_data', $_SESSION[_SITE_INFO]['s_image']);
        }else{
            $this->view->assign('image_data', '');
        }
        $this->view_display();
    }


    // 削除画面
    public function screen_delete()
    {
        // データベースを操作します。
        $SiteModel = new SiteModel();
        if ($this->action == "confirm") {
            $_SESSION[_SITE_INFO] = $SiteModel->get_site_data_id($_GET['id']);
            $this->message = "[削除する]をクリックすると　";
            $this->message .= htmlspecialchars($_SESSION[_SITE_INFO]['sitename'], ENT_QUOTES);
            $this->message .= "　のサイト情報を削除します。";
            $this->form->addElement('submit', 'submit', ['value' => '削除する']);

            $this->next_type = 'delete';
            $this->next_action = 'complete';
            $this->title = '削除確認';
            $this->file = 'delete.tpl';
        } else {
            if ($this->action == "complete") {
                $SiteModel->delete_site($_SESSION[_SITE_INFO]['id']);
                unset($_SESSION[_SITE_INFO]);
                $this->message = "サイト情報を削除しました。";
                $this->title = '削除完了';
                $this->file = 'message.tpl';
            }
        }
        $this->view_display();
    }

}
