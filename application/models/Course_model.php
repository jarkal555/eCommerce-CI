<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_model extends CI_Model
{
    public function get_popular_courses($limit)
    {
        $this->db->where('status', 1);
        $this->db->order_by('sort_order', 'asc');
        $query = $this->db->get('courses', $limit);
        if ($query->num_rows() > 0) {
            $courses = $query->result();
            return $courses;
        }
        return false;
    }
}
