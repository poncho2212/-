<?php

/*
    各Controllerクラスのベースとなるクラス
*/

use Symfony\Contracts\Service\Attribute\Required;

class BaseController {
    protected $type;
    protected $action;
    protected $next_type;
    protected $next_action;
    protected $file;
    protected $form;
    protected $renderer;
    protected $sess;
    protected $view;
    protected $title;
    protected $message;
    protected $f_message;
    protected $link;
    protected $image;
    
    public function __construct(){
        // VIEWの準備
        $this->view_initialize();
    }
    
    private function view_initialize(){
        // 画面表示クラス
        $this->view = new Smarty();
        // Smarty関連ディレクトリの設定
        $this->view->template_dir = _SMARTY_TEMPLATES_DIR;
        $this->view->compile_dir  = _SMARTY_TEMPLATES_C_DIR;
        $this->view->config_dir   = _SMARTY_CONFIG_DIR;
        $this->view->cache_dir    = _SMARTY_CACHE_DIR;

        // 入力チェック用クラス
        $this->form = new HTML_QuickForm2('Form');
        HTML_QuickForm2_Renderer::register('smarty','HTML_QuickForm2_Renderer_Smarty');
        $this->renderer  = HTML_QuickForm2_Renderer::factory('smarty');
        $this->renderer->setOption('old_compat', true);
        $this->renderer->setOption('group_errors', false);

        // リクエスト変数 (typeとactionで動作を決定)
        if(isset($_REQUEST['type'])){   $this->type   = $_REQUEST['type'];}
        if(isset($_REQUEST['action'])){ $this->action = $_REQUEST['action'];}

        // 共通の変数
        $this->view->assign('SCRIPT_NAME', _SCRIPT_NAME);
        $this->view->assign('add_pageID',  $this->add_pageID());
    }

    // 各変数とフォームを読み込み、テンプレートに組み込んで表示
    protected function view_display(){
        $this->view->assign('title', $this->title);
        $this->view->assign('message', $this->message);
        $this->view->assign('type',    $this->next_type);
        $this->view->assign('action',  $this->next_action);
        $this->view->assign('f_message', $this->f_message);
        $this->view->assign('image', $this->image);

        $this->view->assign('form', $this->form->render($this->renderer)->toArray());
        $this->view->display($this->file);
    }

    
    // サイト情報の入力項目と入力ルールの設定
    public function make_form_controle(){
        $RequiredModel = new RequiredModel;
        $required_time_array = $RequiredModel->get_required_time_data();
        $KenModel = new KenModel;
        $ken_array = $KenModel->get_ken_data();
        $CancelModel = new CancelModel;
        $cancel_array = $CancelModel->get_cancel_data();
        $NatureModel = new NatureModel;
        $nature_array = $NatureModel->get_nature_data();
        $RestroomModel = new RestroomModel;
        $cleanliness_restrooms_array = $RestroomModel->get_cleanliness_restrooms_data();
        $ShowersModel = new ShowersModel;
        $showers_array = $ShowersModel->get_showers_data();
        
        $sitename =  $this->form->addElement('text',  'sitename',  ['size' => 30], ['label' => 'サイト名'] );
        $ken =       $this->form->addElement('select','ken',       null, ['label' => '県名', 'options' => $ken_array] );
        $fees =      $this->form->addElement('text','fees',       ['size' => 30], ['label' => '料金'] );
        $required_time = $this->form->addElement('select', 'required_time', null, ['label' => '家からの所要時間', 'options' => $required_time_array]);
        $cancel = $this->form->addElement('select', 'cancel', null, ['label' => 'キャンセル条件', 'options' => $cancel_array]);
        $nature = $this->form->addElement('select', 'nature', null, ['label' => '立地', 'options' => $nature_array]);
        $cleanliness_restrooms = $this->form->addElement('select', 'cleanliness_restrooms', null, ['label' => 'トイレの清潔さ', 'options' => $cleanliness_restrooms_array]);
        $bidet = $this->form->addElement('select', 'bidet', null, ['label' => 'ウォシュレットの有無', 'options' => [
            'ある' => 'ある',
            'なし' => 'なし',
        ]]);
        $showers = $this->form->addElement('select', 'showers', null, ['label' => 'シャワー等の有無', 'options' => $showers_array]);
        $shop = $this->form->addElement('select', 'shop', null, ['label' => '売店の有無', 'options' => [
            'ある' => 'ある',
            'なし' => 'なし',
        ]]);
        $ice_vending = $this->form->addElement('select', 'ice_vending', null, ['label' => 'アイスの自動販売機の有無', 'options' => [
            'ある' => 'ある',
            'なし' => 'なし',
        ]]);
        $drinking = $this->form->addElement('select', 'drinking', null, ['label' => '水場の水が飲めるかどうか', 'options' => [
            '飲める' => '飲める',
            '飲めない' => '飲めない',
        ]]);
        $garbage = $this->form->addElement('select', 'garbage', null, ['label' => 'ゴミ捨てできるかどうか', 'options' => [
            'できる' => 'できる',
            'できない' => 'できない',
            '有料でできる' => '有料でできる',
        ]]);
        $parking = $this->form->addElement('select', 'parking', null, ['label' => '駐車ができるかどうか', 'options' => [
            'できる' => 'できる',
            'できない' => 'できない',
        ]]);
        $space = $this->form->addElement('text', 'space', ['size' => 30], ['label' => 'サイトの広さ']);
        $check_in = $this->form->addElement('text', 'check_in', ['size' => 30], ['label' => 'チェックイン時間']);
        $check_out = $this->form->addElement('text', 'check_out', ['size' => 30], ['label' => 'チェックアウト時間']);
        $comment = $this->form->addElement('textarea', 'comment', ['rows' => 8, 'cols' => 50,], ['label' => 'その他メモ']);
        $link = $this->form->addElement('text', 'link', ['size' => 30], ['label' => 'サイトURL']);
        $s_image = $this->form->addElement('file', 's_image', null, ['label' => '写真']);
        
        $sitename->addRule('required', 'サイト名を入力してください。', null, HTML_QuickForm2_Rule::SERVER);

        $this->form->addRecursiveFilter('trim');

    }
    
    
    // 検索処理について、pageIDをURLに追加する
    public function add_pageID(){
        if($this->type != 'list'){ return;}
        $add_pageID = "";
        if(isset($_GET['pageID']) && $_GET['pageID'] != ""){
            $add_pageID = '&pageID=' . $_GET['pageID'];
            $_SESSION['pageID'] = $_GET['pageID'];
        }else if(isset($_SESSION['pageID']) && $_SESSION['pageID'] != ""){
            $add_pageID = '&pageID=' . $_SESSION['pageID'];
        }
        return $add_pageID;
    }

    // ページ分割処理
    public function make_page_link($data){
        require_once('Pager/Jumping.php');
        // 1ページ10件
        $params = [
            'mode'      => 'Jumping',
            'perPage'   => 10,
            'delta'     => 10,
            'itemData'  => $data
        ];
        $pager = new Pager_Jumping($params);
        $data  = $pager->getPageData();
        $links = $pager->getLinks();
        return [$data, $links];
    } 
}
