<?php
class Moviemodel extends CI_Model {

    function __construct()
    {
        parent:: __construct();
        $db = $this->load->database();
    }

    function addToDB($title, $director, $genre, $rating, $year) {
        $this->db->insert('films', array('title'=>$title, 'director'=>$director, 'genre'=>$genre, 'imdbRating'=>$rating, 'releaseYear'=>$year));
    }

    function searchMovies($genre) {
        $this->db->where('genre', $genre);
        $result = $this->db->get('films');

        if ($result->num_rows() == 0) {
            return false;
        }

        $movies = array();

        foreach ($result->result() as $row) {
            $movies[] = $row;
        }

        if (empty($movies)) {
            return false;
        }
        
        return $movies;
    }

    function getAll() {
        $result = $this->db->get('films');

        $movies = array();

        foreach ($result->result() as $row) {
            $movies[] = $row;
        }

        return $movies;
    }
}