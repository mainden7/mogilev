<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $data = array();
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['news'] = Articles::load_all();
        $data['testimonials'] = Testimonial::load_all_testimonials();
        $data['categories'] = Product::load_categories();
//        print '<pre>' . print_r($data['categories'], true) . '</pre>'; die();
        $data['products'] = Product::load_products();
        $data['page'] = 'home';
        $page_id = 1;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/video_bg', $data);
        $this->load->view('user/catalog', $data);
        $this->load->view('user/about_us', $data);
        $this->load->view('user/geography', $data);
        $this->load->view('user/news', $data);
        $this->load->view('user/footer', $data);
    }

    public function category($id){
        if($id == NULL){
            show_404();
        }
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();

        $data = array();
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['category'] = Product::load_categories($id);
        $data['categories'] = Product::load_categories();

        $data['products'] = Product::load_product_by_category($data['category']['name']);
//        print '<pre>' . print_r($data['products'], true) . '</pre>'; die();
        if(count($data['products']) < 2){
            redirect(base_url() . 'user/product/' . $data['products'][0]['id']);
        }

//        print '<pre>' . print_r($data['products'], true) . '</pre>'; die();
        //data
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/category', $data);
        $this->load->view('user/footer', $data);
    }

    public function faq($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'faq';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['page'] = 'faq';
        $page_id = 3;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
         $data['title'] = $data['seo_text']['title'];
        $data['meta'] = $data['seo_text']['meta'];
        $data['faq'] = New_faq::load_all();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/faq');
        $this->load->view('user/do_not_find');
        $this->load->view('user/seotext', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function about($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'about';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'about';
        $page_id = 4;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
        $data['title'] = $data['seo_text']['title'];
        $data['meta'] = $data['seo_text']['meta'];
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/about_content', $data);
        $this->load->view('user/footer', $data);
    }
    public function history($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'about';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'history';
        $page_id = 4;
        $data['seo_text'] = Seo_text::load_seo_text($page_id);
        $data['title'] = $data['seo_text']['title'];
        $data['meta'] = $data['seo_text']['meta'];
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/history_content', $data);
        $this->load->view('user/footer', $data);
    }

    public function contacts($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'contact';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/contacts', $data);
        $this->load->view('user/footer', $data);
    }

    public function production($id = NULL)
    {
        if(!isset($id)){
            show_404();
        }
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'contact';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        if($id == 1) {
            $this->load->view('user/blocks_production', $data);
        }else{
            $this->load->view('user/dry_mixes_production', $data);
        }
        $this->load->view('user/footer', $data);
    }

    public function product($id = NULL)
    {

        if($id == NULL){
            show_404();
        }
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();

        $data = array();
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();

        $data['product'] = Product::load_products($id);

//        print '<pre>' . print_r($data['product'], true) . '</pre>'; die();
        //data
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/left_nav', $data);
        if($id == 13) {
            $this->load->view('user/product_wall_first', $data);
        }elseif($id == 14){
            $this->load->view('user/product_wall_third', $data);
        }elseif ($id == 15){
            $this->load->view('user/product_grid', $data);
        }elseif ($id == 8){
            $this->load->view('user/product_partition_first', $data);
        }elseif ($id == 2){
            $this->load->view('user/product4', $data);
        }elseif ($id == 4){
            $this->load->view('user/product5', $data);
        }elseif ($id == 5){
            $this->load->view('user/product6', $data);
        }else{
            show_404();
        }
        $this->load->view('user/footer', $data);
    }
    public function slabs($id = NULL)
    {


            // CSRF protection arguments.
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);

            $data = array();
            $data['active'] = 'slabs';
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();

            $data['categories'] = Product::load_categories(2);
        $data['proposal_category'] = Product::load_categories(3);
        $data['blocks_category'] = $data['categories']['name'];
        if(!empty($data['blocks_category'])) {
            $data['products'] = Product::load_product_by_category($data['blocks_category']);
        }
        if(!empty($data['proposal_category'])) {
            $data['proposal_products'] = Product::load_product_by_category($data['proposal_category']['name']);
        }
        $data['oneclick'] = Product::load_oneclick();
//print '<pre>' . print_r($data['products'], true) . '</pre>'; die();
            $data['title'] = $data['categories']['title'];
            $data['meta'] = $data['categories']['meta'];
            $data['page'] = 'slabs';
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/slabs_main', $data);
            $this->load->view('user/instruments', $data);
            $this->load->view('user/contact_director', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);

    }

    public function instruments($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'instruments';
        $data['title'] = '';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['products'] = Product::load_products();
        $data['categories'] = Product::load_categories(3);
        $data['title'] = $data['categories']['title'];
        $data['meta'] = $data['categories']['meta'];
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/instruments_main', $data);
        $this->load->view('user/only_with_main', $data);
        $this->load->view('user/do_not_find', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function news_article($id = NULL){
        if(isset($id)) {
            // CSRF protection arguments.
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);

            $data = array();
            $data['active'] = '';
            $data['title'] = '';
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();
            $data['articles'] = Articles::load_all();
            $data['article'] = Articles::load_article($id);
            $data['title'] = $data['article']['title'];
            $data['meta'] = $data['article']['meta'];
            $data['article_id'] = $id;
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/article_main', $data);
            $this->load->view('user/other_articles', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        }else{
            // CSRF protection arguments.
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);
            $data = array();
            $data['active'] = '';
            $data['title'] = '';
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();
            $data['categories'] = Product::load_categories();
            $data['articles'] = Articles::load_all();

            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
            //views
            $this->load->view('user/header', $data);
            $this->load->view('user/left_nav', $data);
            $this->load->view('user/news_main', $data);
            $this->load->view('user/footer', $data);
        }
    }

    public function cart($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = '';
        $data['title'] = '';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();

        if (isset($this->session->userdata['items'])) {
            $added_items = $this->session->userdata['items'];
        } else {
            $added_items = array();
        }
        /*print '<pre>' . print_r($added_items, true) . '</pre>'; die();*/
        $product_id = 0;
        $product = array();
        foreach ($added_items as $item_id => $item_count) {

            $product[$item_id] = Product::load_products($item_id);
            $product[$item_id]['quantity'] = $item_count;
        }
//        print '<pre>' . print_r($product, true) . '</pre>'; die();
        if (empty($product)) {
            $data['empty_cart_title'] = 'В корзине нет покупок';
        }
        $data['products'] = $product;
        $data['categories'] = Product::load_categories();
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/cart', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function cart_next($user_id = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $get = $this->input->get(NULL, TRUE);

        $data = array();
        $data['active'] = '';
        $data['title'] = '';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['products'] = $get;
        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/main_menu', $data);
        $this->load->view('user/cart_next', $data);
        $this->load->view('user/main_footer', $data);
        $this->load->view('user/footer', $data);
    }

    public function post_order()
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $contact_settings = Settings::load_contact_settings();
        if ($post OR $is_post) {

            $data['contact_settings'] = Settings::load_contact_settings();
            $email = $data['contact_settings']['main_email'];
            $products = substr($post['products'], 0, -1);
            $products = explode('/', $products);
            foreach ($products as $key => $value) {
                $pr = explode(',', $value);

                $products[$key] = $pr;
            }
/*            print '<pre>' . print_r(var_dump($products), true) . '</pre>'; die();*/
            $id = Order::save_order($post['name'], $post['tel'], $post['email'], $post['region'], $post['district'], $post['city'], $post['street'], $post['house'], $post['corp'], $post['comments'], $post['delivery_date']);

            $order_msg = '';
            foreach ($products as $product) {
                if($product[1] != 0) {
                    Order::save_order_items($id, $product[0], $product[1]);
                }
                # code...
                $product_ordered = Product::load_products($product[0]);
                $product_quantity = $product[1];
                $order_msg .= $product_ordered['name'] . ' в количестве: ' . $product_quantity . '<br>';
            }



            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $headers .= 'From: <no-replay@blockpostavka.ru>' . "\r\n";
            $subject = 'Новый заказ';
//            $msg = '<html><head><title>' . $subject . '</title></head><body><h3>Главная информация</h3><p>Имя: ' . $post['name'] . '</p><p>Телефон: ' . $post['tel'] . '</p><p>Email: ' . $post['email'] . '</p><h3>Адрес</h3><p>Регион: ' . $post['region'] . '</p><p>Район: ' . $post['district'] . '</p><p>Район: ' . $post['city'] . '</p><p>Улица: ' . $post['street'] . '</p><p>Дом: ' . $post['house'] . '</p><p>Корпус: ' . $post['corp'] . '</p><p>Дата доставки: ' . (isset($post['date']) ? $post['date'] : NULL) . '</p><p>Комментарий: ' . (isset($post['comments']) ? $post['comments'] : '') . '</p><p>Заказ: ' . $order_msg . '</p></body></html>';
            $msg = 'Новый заказ. Ордер #'.$id.' подробности по ссылке: http://blockpostavka.ru/admin_panel/index';
            mail($contact_settings['main_email'], $subject, $msg, $headers);


        }
    }

    public function instrument_product($id = NULL)
    {
        if (isset($id)) {
            // CSRF protection arguments.
            $csrf_token_name = $this->security->get_csrf_token_name();
            $csrf_hash = $this->security->get_csrf_hash();
            $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
            $post = $this->input->post(NULL, TRUE);

            $data = array();
            $data['active'] = 'instruments';
            $data['title'] = '';
            $data['main_settings'] = Settings::load_main_settings();
            $data['contact_settings'] = Settings::load_contact_settings();

            $data['product'] = Product::load_products($id);
            $data['title'] = $data['product']['title'];
            $data['meta'] = $data['product']['meta'];
            if (!isset($data['product']) OR empty($data['product'])) {
                show_404();
            }
            if ($data['product']['category'] != 'Инструменты') {
                show_404();
            }
            // Data.
            $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);

            $this->load->view('user/header', $data);
            $this->load->view('user/main_menu', $data);
            $this->load->view('user/instrument_product', $data);
            $this->load->view('user/main_footer', $data);
            $this->load->view('user/footer', $data);
        } else {
            show_404();
        }

    }

    public function set_city()
    {
        $this->session->set_userdata('user_city', $_POST['city']);
    }

    public function add_to_cart($id = NULL, $where = NULL)
    {
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $get = $this->input->get(NULL, TRUE);
        print '<pre>' . print_r($post, true) . '</pre>'; die();
        if ($post) {

        } else {
            show_404();
        }
    }

    public function delete_from_cart($id = NULL)
    {

        if (isset($id)) {
            $items = $this->session->userdata['items'];
            unset($items[$id]);
            $this->session->set_userdata('items', $items);
            redirect('/user/cart');
            /*print '<pre>' . print_r($items, true) . '</pre>'; die();*/
        } else {
            show_404();
        }
    }

    public function send_message(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);
        $get = $this->input->get(NULL, TRUE);
        $contact_settings = Settings::load_contact_settings();
        if($post || $is_post){
            


            $subject = $post['subject'];
//            $msg = '
//                <html>
//                    <head>
//                        <title>' . $subject . '</title>
//                    </head>
//                    <body>
//                    	<h3>Главная информация</h3>
//                        <p>Имя: ' . $post['name'] . '</p>
//                        <p>Телефон: ' . $post['tel'] . '</p>
//                        <p>Комментарий: ' . (isset($post['comments']) ? $post['comments'] : '') . '</p>
//                    </body>
//                </html>';
            $msg = 'Пришло новое сообщение. Подробности по ссылке ' . base_url() . '/admin_panel/index';
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $headers .= 'From: <no-replay@blockpostavka.ru>' . "\r\n";
            mail($contact_settings['main_email'], $post['subject'], $msg, $headers);
            Message::save_message($post['name'], $post['tel'], $post['comment'], $subject);
        }else{
            show_404();
        }

    }
    public function test(){

    }

    public function how_to_order(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'how_to_order';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'how_to_order';

        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/how_to_order', $data);
        $this->load->view('user/footer', $data);
    }

    public function how_to_pay(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'how_to_pay';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'how_to_pay';

        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/how_to_pay', $data);
        $this->load->view('user/footer', $data);
    }

    public function docs(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'docs';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'docs';

        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/docs', $data);
        $this->load->view('user/footer', $data);
    }
    public function delivery(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'delivery';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'delivery';

        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/delivery', $data);
        $this->load->view('user/footer', $data);
    }

    public function prices(){
        // CSRF protection arguments.
        $csrf_token_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();
        $is_post = ($this->input->server('REQUEST_METHOD', TRUE) == 'POST');
        $post = $this->input->post(NULL, TRUE);

        $data = array();
        $data['active'] = 'prices';
        $data['main_settings'] = Settings::load_main_settings();
        $data['contact_settings'] = Settings::load_contact_settings();
        $data['categories'] = Product::load_categories();
        $data['page'] = 'prices';

        // Data.
        $data = array('data' => $data, 'csrf_hash' => $csrf_hash, 'csrf_token_name' => $csrf_token_name);
        //views
        $this->load->view('user/header', $data);
        $this->load->view('user/left_nav', $data);
        $this->load->view('user/prices', $data);
        $this->load->view('user/footer', $data);
    }
}