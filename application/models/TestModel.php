<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model {

    // Retrieve roles from the 'role' table
    public function getRoles() {
        $query = $this->db->get('role');
        return $query->result();
    }

    // Check if a user with the given email already exists
    public function checkUserExists($userData) {
        $this->db->where('email', $userData['email']);
        $this->db->where('role', $userData['role']);
        $query = $this->db->get('user');
    
        return ($query->num_rows() > 0);
    }
    
    public function checkUserAllowed($email) {
        $ninetyDaysAgo = strtotime('-90 days');
    
        $this->db->where('email', $email);
        $this->db->where('date >=', date('Y-m-d', $ninetyDaysAgo));
        $query = $this->db->get('user');
    
        return ($query->num_rows() < 2);
    }
    
    
    // Add a new user to the 'users' table
    public function addUser($userData) {
        $userData['date'] = date('Y-m-d H:i:s');
        $this->db->insert('user', $userData);
    }

    // Update user's score based on their email
    public function update_UserScoreByEmail($userEmail, $score, $grade) {
        $this->db->set('score', $score);
        $this->db->set('grade', $grade);
        $this->db->where('email', $userEmail);
        $this->db->update('user');
    }
    
}
