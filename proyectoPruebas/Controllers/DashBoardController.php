<?php
namespace Controllers;

use Models\Libro;
use Models\Usuario;
use Models\Reservas;
use Lib\Pages;
use Lib\Validation;

class DashBoardController{
    private Pages $pages;
    private Libro $libro;
    private Usuario $usuario;
    private Reservas $reserva;

    public function __construct() {
        
        $this->pages=new Pages();
        $this->libro=new Libro();
        $this->usuario=new Usuario();
        $this->reserva=new Reservas();
    }


    public function Inicio(){
        session_start();
        $libros = $this->libro->getAll();
        $this->pages->render('libro/inicio',['libros'=>$libros]);
        
    }
    public function horario(){      
        session_start();
        $libros = $this->libro->getAll();
        $this->pages->render('libro/horarios',['libros'=>$libros]);
    }
    public function evento(){      
        session_start();
        $libros = $this->libro->getAll();
        $this->pages->render('libro/eventos',['libros'=>$libros]);
    }
    public function ludoteca(){      
        session_start();
        $libros = $this->libro->getAll();
        $this->pages->render('libro/ludotalleres',['libros'=>$libros]);
    }
    public function actividad(){      
        session_start();
        $libros = $this->libro->getAll();
        $this->pages->render('libro/actividades',['libros'=>$libros]);
    }


    
}
?>