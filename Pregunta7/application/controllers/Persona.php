<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persona extends CI_Controller
{

        public function index()
        {
                $this->load->model('Persona_Model');
                $data['personas'] = $this->Persona_Model->get();
                $this->load->view('index.php', $data);
        }

        public function crear()
        {
                $this->load->view('crear.php');
        }

        public function store()
        {
                $this->load->model('Persona_Model');
                $ci = $this->Persona_Model->save($_POST);
                $this->load->helper('url');
                redirect("http://localhost/pregunta7/index.php/persona/");
        }

        public function editar($id)
        {
                $this->load->model('Persona_Model');
                $data['persona'] = $this->Persona_Model->get_id($id);
                $this->load->view('edit.php', $data);
        }


        public function update($id)
        {
                $this->load->model('Persona_Model');
                $ci = $this->Persona_Model->update($_POST, $id);
                echo $ci;
                $this->load->helper('url');
                redirect("http://localhost/pregunta7/index.php/persona/");
        }

        public function eliminar($id)
        {
                $this->load->model('Persona_Model');
                $resultado = $this->Persona_Model->get_id($id);
                if (count($resultado) > 0) {
                        $this->Persona_Model->delete($id);
                        $this->index();
                }
                $this->load->helper('url');
                redirect("http://localhost/pregunta7/index.php/persona/");
        }
}
