<?php
class user_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    //insert into user table
    function insertUser($data)
    {
        return $this->db->insert('fab_member', $data);

    }
    
    //send verification email to user's email id
    function sendEmail($to_email)
    {
        $from_email = 'fahmicup21@gmail.com'; //change this to yours
        $subject = 'Verifikasi Alamat Email';
        $message = 'Pengguna yang terhormat,<br /><br />Silahkan klik link aktivasi di bawah ini untuk memverifikasi alamat email anda.<br /><br /> http://localhost/simpelbangtmg/index.php/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Tim Krenova';
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = micup2126; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Tim Krenova');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }
    
    //activate user account
    function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('fab_member', $data);
    }
}
?>