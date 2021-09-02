<?php
class Proveedor
{
    private $TipoProveedor;
    private $IdProveedor;
    private $NombreProveedor;
    private $CuilProveedor;
    private $DireccionProveedor;
    private $TelefonoProveedor;

    public function getTipoProveedor()
    {
        return $this->TipoProveedor;
    }
    public function setTipoProveedor($TipoProveedor)
    {
        $this->TipoProveedor = $TipoProveedor;
    }

    public function getIdProveedor()
    {
        return $this->IdProveedor;
    }
    public function setIdProveedor($IdProveedor)
    {
        $this->IdProveedor = $IdProveedor;
    }

    public function getNombreProveedor()
    {
        return $this->NombreProveedor;
    }
    public function setNombreProveedor($NombreProveedor)
    {
        $this->NombreProveedor = $NombreProveedor;
    }

    public function getCuilProveedor()
    {
        return $this->CuilProveedor;
    }
    public function setCuilProveedor($CuilProveedor)
    {
        $this->CuilProveedor = $CuilProveedor;
    }

    public function getDireccionProveedor()
    {
        return $this->DireccionProveedor;
    }
    public function setDireccionProveedor($DireccionProveedor)
    {
        $this->DireccionProveedor = $DireccionProveedor;
    }

    public function getTelefonoProveedor()
    {
        return $this->TelefonoProveedor;
    }
    public function setTelefonoProveedor($TelefonoProveedor)
    {
        $this->TelefonoProveedor = $TelefonoProveedor;
    }
}