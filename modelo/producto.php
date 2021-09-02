<?php
class Producto
{
    private $Id;
    private $Nombre;
    private $Codigo;
    private $Precio;
    private $Marca;
    private $ListaProveedores = array();

    public function getId()
    {
        return $this->Id;
    }
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    public function getCodigo()
    {
        return $this->Codigo;
    }
    public function setCodigo($Codigo)
    {
        $this->Codigo = $Codigo;
    }

    public function getPrecio()
    {
        return $this->Precio;
    }
    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;
    }

    public function getMarca()
    {
        return $this->Marca;
    }
    public function setMarca($Marca)
    {
        $this->Marca = $Marca;
    }

    public function getListaProveedores()
    {
        return $this->ListaProveedores;
    }
    public function setProveedor($proveedor)
    {
        $this->ListaProveedores[]= $proveedor;
    }

    public function MostrarInformacion()
    {
        echo 'Id: ' . $this->getId();
        echo '<br>';
        echo 'Nombre: ' . $this->getNombre();
        echo '<br>';
        echo 'Codigo: ' . $this->getCodigo();
        echo '<br>';
        echo 'Precio: ' . $this->getPrecio();
        echo '<br>';
        echo 'Marca: ' . $this->getMarca();
        echo '<br>';
        foreach ($this->getListaProveedores() as $proveedores){
            echo $proveedores->getTipoProveedor();
            echo $proveedores->getIdProveedor();
            echo $proveedores->getNombreProveedor();
            echo $proveedores->getCuilProveedor();
            echo $proveedores->getDireccionProveedor();
            echo $proveedores->getTelefonoProveedor();
            echo '<br>';
         }
    }
}