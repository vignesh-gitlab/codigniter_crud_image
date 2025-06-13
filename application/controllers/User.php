<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User extends CI_Controller {
 
        function __construct(){
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('users_model');
                //include modal.php in views
                // $this->inc['modal'] = $this->load->view('modal', '', true);
        }
        public function index(){
                //$this->load->view('show', $this->inc);
                $this->load->view('show');
        }
 
        public function show(){
                $data = $this->users_model->show();
                $output = array();
                foreach($data as $row){
                        ?>
                        <tr>
                                <td><?php echo $row->id; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->password; ?></td>
                                <td><?php echo $row->fname; ?></td>
                                <td><?php if(($row->image == '')){
                                    echo "No Image";
                                } else { ?>
                                          <img src="<?php echo base_url($row->image); ?>" alt="Profile Image" width="60" height="60" style="object-fit:cover;">
                                <?php } ?>
                                </td>
                                <td>
                                        <button class="btn btn-warning edit" data-id="<?php echo $row->id; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button> ||
                                        <button class="btn btn-danger delete" data-id="<?php echo $row->id; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                                </td>
                        </tr>
                        <?php
                }
        }
 
        // public function insert(){
        //         $user['email'] = $_POST['email'];
        //         $user['password'] = $_POST['password'];
        //         $user['fname'] = $_POST['fname'];
               
        //         $query = $this->users_model->insert($user);
        // }
        public function insert()
        {
            $this->load->helper(['form', 'url']);

            // Configure image upload
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // in KB
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                echo json_encode(['status' => 'error', 'message' => $this->upload->display_errors()]);
                return;
            }

            $upload_data = $this->upload->data();
            $image_path = 'uploads/' . $upload_data['file_name'];

            
            $user['email'] = $_POST['email'];
            $user['password'] = $_POST['password'];
            $user['fname'] = $_POST['fname'];
            $user['image'] = $image_path;
        
            $inserted = $this->users_model->insert($user);
            if ($inserted) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Database insert failed']);
            }

            
        }
 
        public function getuser(){
                $id = $_POST['id'];
                $data = $this->users_model->getuser($id);
                echo json_encode($data);
        }
 
        public function update(){
                $id = $_POST['id'];
                $user['email'] = $_POST['email'];
                $user['password'] = $_POST['password'];
                $user['fname'] = $_POST['fname'];
 
                $query = $this->users_model->updateuser($user, $id);
        }
 
        public function delete(){
                $id = $_POST['id'];
                $query = $this->users_model->delete($id);
        }
 
}