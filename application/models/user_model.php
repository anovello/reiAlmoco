<?php

class User_model extends CI_Model {

    public function insert($data)
    {
        return $this->db->insert('user', $data);
    }

    public function getMail($data)
    {
        $this->db->where('email', $data);
        return $this->db->get('user')->row();
    }

    public function getAll()
    {
        return $this->db->get('user')->result();
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('user')->result();
    }

    // function listarTodos() {

        

    //     unset($query);

        

    //     $this->db->where('ativo ', 1);

    //     $this->db->order_by('data', 'desc');

    //     $this->db->limit(8);

    //     $query = $this->db->get('noticias')->result_array();



    //     return $query;

    // }

    // function listarPaginacao($options) 

    // {

    //     unset($query);

        

    //     $this->db->where('ativo', 1);

    //     $this->db->order_by('data', 'desc');

        

    //     if(!isset($options['total'])) {

    //         $this->db->select('COUNT(1) as total');

    //         return $this->db->get('noticias')->row();

    //     }

        

    //     if (isset($options['porPage']))

    //     {

    //         $this->db->limit($options['porPage'], $options['apartir']);

    //     }

        

    //     return $this->db->get('noticias')->result();

    // }

    

    // function listarTodasGalHome() {

    //     unset($query);

        

    //     $this->db->select('galerias.id, galerias.nome, galeria_imagem.id_galeria');

        

    //     $this->db->from('galerias, galeria_imagem');

    //      $this->db->join('imagens', ' imagens.id = galeria_imagem.id_img', 'RIGTH');

    //     //$this->db->join('galeria_imagem', 'galeria_imagem.id_galeria = galerias.id');

    //     //$query = $this->db->get()->result_array();

    //     //$this->db->where('imagens.capa', 1);

    //     $this->db->where('galeria_imagem.id_galeria = galerias.id');

    //     $this->db->where('galerias.ativo', 1);

    //     $this->db->where('imagens.capa', 1);

    //     $this->db->distinct();

        

    //     $query = $this->db->get()->result_array();



    //     return $query;

    // }

    // function listarTodasImgHome() {

    //     unset($query);

    //     $this->db->select('imagens.id, imagens.nome, imagens.img, imagens.capa, imagens.ativo, galeria_imagem.id_img, galeria_imagem.id_galeria');

    //     $this->db->from('imagens');

    //     $this->db->join('galeria_imagem', 'galeria_imagem.id_img = imagens.id', 'ALL');

    //      $this->db->where('imagens.capa', 1);

    //     $query = $this->db->get()->result_array();

    //     //echo $this->db->last_query();die();

    //     return $query;

    // }

    // function listar($id) {

    //     unset($query);



    //     $this->db->where('id', $id);



    //     $query = $this->db->get('galerias')->row();



    //     return $query;

    // }

    

    // function listarSlug($id) {

    //     unset($query);



    //     $this->db->where('slug', $id);



    //     $query = $this->db->get('noticias')->row();



    //     return $query;

    // }



    // function listarTodosNum() {

    //     unset($query);



    //     // $this->db->order_by('ordem');

    //     $this->db->where('ativo', 1);

    //     $query = $this->db->get('galerias')->num_rows();



    //     return $query;

    // }



    // function listarTodasImg($id) {

    //     unset($query);

    //     $this->db->select('imagens.id, imagens.nome, imagens.img, imagens.capa, imagens.ativo');

    //     $this->db->from('imagens');

    //     $this->db->where('galeria_imagem.id_galeria', $id);

    //     $this->db->join('galeria_imagem', 'galeria_imagem.id_img = imagens.id', 'LEFT');

    //     $query = $this->db->get()->result_array();

    //     //echo $this->db->last_query();die();

    //     return $query;

    // }


    // public function record_count_img($id) {

    //     $this->db->select('*');

    //     $this->db->from('imagens');



    //     $this->db->where('imagens.ativo', 1);

    //     $this->db->where('galeria_imagem.id_galeria', $id);

    //     $this->db->join('galeria_imagem', 'galeria_imagem.id_img = imagens.id', 'LEFT');



    //     $query = $this->db->get()->num_rows();

    //     return $query;

    // }



    // public function fetch_countries_img($limit, $start, $id) {

    //     $this->db->limit($limit, $start);

    //     $this->db->select('*');

    //     $this->db->from('imagens');





    //     $this->db->where('imagens.ativo', 1);

    //     $this->db->where('galeria_imagem.id_galeria', $id);

    //     $this->db->join('galeria_imagem', 'galeria_imagem.id_img = imagens.id', 'LEFT');



    //     $query = $this->db->get();

    //     //print_r($this->db->last_query());die();

    //     if ($query->num_rows() > 0) {

    //         foreach ($query->result() as $row) {

    //             $data[] = $row;

    //         }

    //         return $data;

    //     }

    //     return false;

    // }


}






    // class Usuariomodel extends CI_Model {

    //     function listarTodos()
    //     {
    //         unset($query);
            
    //         $query = $this->db->get('w0_usuario')->result_array();
            
    //         return $query;
    //     }
        
    //     function listar($usuario)
    //     {
    //         unset($query);
            
    //         $this->db->where('usuario',$usuario);
    //         $query = $this->db->get('w0_usuario')->row();
            
    //         return $query;
    //     }

    //     function verificar($usuario,$senha)
    //     {
    //         unset($query);
            
    //         $this->db->where('usuario',$usuario);
    //         $this->db->where('senha',$senha);
    //         $query = $this->db->get('w0_usuario');
            
    //         if ($query->num_rows == 1) :
    //             return true;
    //         else :
    //             return false;
    //         endif;
    //     }
        
    //     function adicionar()
    //     {
    //         unset($query);
            
    //         $dados = array(
    //           'usuario' => $usuario,
    //           'nome' => $nome,
    //           'senha' => $senha,
    //           'email' => $email,
    //           'status' => '1'
    //         );
    //         $query = $this->db->insert('w0_usuario', $dados);
            
    //         return $query;
    //     }
        
    //     function desativar($id)
    //     {
    //         unset($query);
            
    //         $dados = array(
    //           'status' => '0'
    //         );
            
    //         $this->db->where('id',$id);
    //         $query = $this->db->delete('w0_usuario', $dados);
            
    //         return $query;
    //     }
        
    //     function excluir($id)
    //     {
    //         unset($query);
            
    //         $this->db->where('id',$id);
    //         $query = $this->db->delete('w0_usuario');
            
    //         return $query;
    //     }
        
    // } 

    ?>