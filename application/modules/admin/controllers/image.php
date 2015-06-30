<?php

date_default_timezone_set("Asia/Jakarta");

class image extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('admin/image/index');
    }

    public function do_upload() {

        // Detect form submission.
        if ($this->input->post('submit')) {

            $path = './uploads/';
            $this->load->library('upload');

            /**
             * Refer to https://ellislab.com/codeigniter/user-guide/libraries/file_uploading.html
             * for full argument documentation.
             *
             */
            // Define file rules
            $this->upload->initialize(array(
                "upload_path" => $path,
                "allowed_types" => "gif|jpg|png",
                "max_size" => '100',
                "max_width" => '1024',
                "max_height" => '768'
            ));

            if ($this->upload->do_multi_upload("uploadfile")) {

                $data['upload_data'] = $this->upload->get_multi_upload_data();

                echo '<p class = "bg-success">' . count($data['upload_data']) . 'File(s) successfully uploaded.</p>';
            } else {
                // Output the errors
                $errors = array('error' => $this->upload->display_errors('<p class = "bg-danger">', '</p>'));

                foreach ($errors as $k => $error) {
                    echo $error;
                }
            }
        } else {
            echo '<p class = "bg-danger">An error occured, please try again later.</p>';
        }
        // Exit to avoid further execution
        exit();
    }

    //put your code here
}

?>
