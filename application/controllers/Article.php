<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Article extends CI_Controller
{

        public function index()
        {
                if (isset($_GET['id'])) {
                        $idItem = $_GET['id'] | null;
                        $article = [
                                'article' => $this->CustomerModel->select($idItem)
                        ];
                        $this->load->view('layouts/header');
                        $this->load->view('layouts/navbar');
                        $this->load->view('update-article', $article);
                        $this->load->view('layouts/footer');
                } else {
                        $data = [
                                'categories' => $this->CategoryModel->list(),
                        ];
                        $this->load->view('layouts/header');
                        $this->load->view('layouts/navbar');
                        $this->load->view('create-article', $data);
                        $this->load->view('layouts/footer');
                }
        }

        public function save()
        {
                $itemId = $this->input->post('itemId');
                $itemName = $this->input->post('itemName');
                $itemValue = $this->input->post('itemValue');
                $itemDescription = $this->input->post('itemDescription');
                $idCategory = $this->input->post('idCategory');

                $article = [
                        'item_name' => $itemName,
                        'item_value' => $itemValue,
                        'item_description' => $itemDescription,
                        'id_category' => $idCategory,
                ];

                $save = null;
                if ($itemId > 0) {
                        $article['id_item'] = $itemId;
                        $save = $this->ArticleModel->update($article);
                } else {
                        $save = $this->ArticleModel->insert($article);
                }

                if ($save) {
                        redirect("article/list");
                } else {
                        echo 'Error al guardarse los registros.';
                }
        }

        public function list($is_active = 1)
        {
                $list = [
                        'articles' => $this->ArticleModel->list($is_active),
                        'active' => $is_active
                ];

                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('articles', $list);
                $this->load->view('layouts/footer');
        }

        public function edit()
        {
                $id = $_GET['id'];

                $article = $this->ArticleModel->select($id);

                $data = [
                        'categories' => $this->CategoryModel->list(),
                        'article' => $article,
                ];

                $this->load->view('layouts/header');
                $this->load->view('layouts/navbar');
                $this->load->view('update-article', $data);
                $this->load->view('layouts/footer');
        }

        public function delete()
        {
                $id = $_GET['id'];
                $is_done = $this->ArticleModel->delete($id);

                if ($is_done) {
                        redirect('article/list');
                } else {
                        echo "Se presentó un error al eliminar el artículo";
                }
        }

        public function restore()
        {
                $id = $_GET['id'];
                $is_done = $this->ArticleModel->restore($id);

                if ($is_done) {
                        redirect('article/inactives');
                } else {
                        echo "Se presentó un error al restaurar el artículo";
                }
        }

        public function delete_permanent()
        {
                $id = $_GET['id'];
                $is_done = $this->ArticleModel->delete_permanent($id);

                if ($is_done) {
                        redirect('article/list');
                } else {
                        echo "Se presentó un error al eliminar permanentemente el artículo";
                }
        }

        public function inactives()
        {
                $this->list(0);
        }
}
