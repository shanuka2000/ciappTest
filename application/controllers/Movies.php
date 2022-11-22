<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

	public function index()
	{
		$this->load->view('movie_form_view');
	}

    public function addToDatabase() {
        $title = $this->input->post('title');
        $director = $this->input->post('director');
        $genre = $this->input->post('genres');
        $rating = $this->input->post('rating');
        $year = $this->input->post('year');

        $this->load->model('Moviemodel');
        $this->Moviemodel->addToDB($title, $director, $genre, $rating, $year);

        header('Location: ../Movies/');
    }

    public function allmovies() {
        $this->getAllMovies();
    }

    public function searchMovie() {
        $this->load->view('search_move_view');
    }

    public function search() {
        $genre = $this->input->post('genres');

        $this->load->model('Moviemodel');
        $result = $this->Moviemodel->searchMovies($genre);

        $this->load->view('search_move_view', array('result' => $result));
    }

    public function getAllMovies() {
        $this->load->model('Moviemodel');
        $result = $this->Moviemodel->getAll();
        
        $this->load->view('all_movie_display_view', array('result' => $result));
    }
}
