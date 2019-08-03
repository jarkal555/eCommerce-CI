<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course_model extends CI_Model
{
    // Get Popular courses for home page
    function get_popular_courses($limit)
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

    // Get categories for courses page 
    function get_categories()
    {
        $this->db->where('status', 1);
        $this->db->order_by('name', 'asc');
        $query = $this->db->get('categories');
        if ($query->num_rows() > 0) {
            $categories = $query->result();
            return $categories;
        }
        return false;
    }

    // Get all courses for courses page
    function get_all_courses_category_wise($category)
    {
        $this->db->select('cs.*,cat.name as category');
        $this->db->from('courses as cs');
        $this->db->join('courses_categories_gp as cc', 'cc.course_id=cs.id');
        $this->db->join('categories as cat', 'cat.id=cc.category_id');
        $this->db->where('cat.seo_url', $category);
        $this->db->where('cat.status', 1);
        $this->db->where('cs.status', 1);
        $this->db->order_by('cs.sort_order', 'asc');
        $query = $this->db->get();
        // return $this->db->last_query();
        if ($query->num_rows() > 0) {
            $courses = $query->result();
            return $courses;
        }
        return false;
    }

    // Get all courses for courses page
    function get_all_courses()
    {
        $this->db->select('cs.*,cat.name as category');
        $this->db->from('courses as cs');
        $this->db->join('courses_categories_gp as cc', 'cc.course_id=cs.id');
        $this->db->join('categories as cat', 'cat.id=cc.category_id');
        $this->db->where('cat.status', 1);
        $this->db->where('cs.status', 1);
        $this->db->order_by('cs.sort_order', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $courses = $query->result();
            return $courses;
        }
        return false;
    }
}
