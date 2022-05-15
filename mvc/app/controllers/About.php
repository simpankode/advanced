<?php 
class About extends Controller
{
    public function index()
    {
        $data['title'] = 'About';
        $data['name'] = $this->model('About_model')->getAbout();
        $data['age'] = $this->model('About_model')->getAbout();
        $data['address'] = $this->model('About_model')->getAbout();

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
?>