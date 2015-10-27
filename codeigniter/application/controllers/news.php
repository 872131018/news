<?php
class News extends CI_Controller
{
	public function show($id)
	{
  	$this->load->model('news_model');
    $news = $this->news_model->get_news($id);
    $data['headline'] = $news['headline'];
    $data['article'] = $news['article'];
    $this->load->view('news_article', $data);
	}
}
?>
