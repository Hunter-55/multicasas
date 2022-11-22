<?php
if (class_exists('inmueble') != true) {
    class inmueble
    {
        protected $encabezado;
        protected $descripcion;
        protected $direccion;
        protected $costo_inmueble;
        protected $recamaras;
        protected $baños;
        protected $estacionamientos;
        protected $estatus;
        protected $ciudad;
        protected $estado;
        protected $codigo_postal;
        protected $area_terreno;
        protected $email;
        protected $latitud;
        protected $longitud;
        protected $exterior;
        protected $interior_1;
        protected $interior_2;


        public function __construct($encabezado = NULL, $descripcion = NULL, $direccion = NULL,
                                    $costo_inmueble = NULL, $recamaras = NULL, $baños = NULL, $estacionamientos = NULL,
                                    $estatus = NULL, $ciudad = NULL, $estado = NULL, $codigo_postal = NULL, $area_terreno = NULL, $email = NULL, $latitud = NULL, $longitud = NULL, $exterior = NULL, $interior_1 = NULL, $interior_2 = NULL)
        {
            $this->encabezado = $encabezado;
            $this->descripcion = $descripcion;
            $this->direccion = $direccion;
            $this->costo_inmueble = $costo_inmueble;
            $this->recamaras = $recamaras;
            $this->baños = $baños;
            $this->estacionamientos = $estacionamientos;
            $this->estatus = $estatus;
            $this->ciudad = $ciudad;
            $this->estado = $estado;
            $this->codigo_postal = $codigo_postal;
            $this->area_terreno = $area_terreno;
            $this->email = $email;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
            $this->exterior = $exterior;
            $this->interior_1 = $interior_1;
            $this->interior_2 = $interior_2;
        }

        public function getEncabezado()
        {
            return $this->encabezado;
        }

        public function setEncabezado($encabezado)
        {
            $this->encabezado = $encabezado;
        }

        public function getDescripcion()
        {
            return $this->descripcion;
        }

        public function setDescripcion($descripcion)
        {
            $this->descripcion = $descripcion;
        }

        public function getDireccion()
        {
            return $this->direccion;
        }

        public function setDireccion($direccion)
        {
            $this->direccion = $direccion;
        }

        public function getCosto_inmueble()
        {
            return $this->costo_inmueble;
        }

        public function setCosto_inmueble($costo_inmueble)
        {
            $this->costo_inmueble = $costo_inmueble;
        }

        public function getRecamaras()
        {
            return $this->recamaras;
        }

        public function setRecamaras($recamaras)
        {
            $this->recamaras = $recamaras;
        }

        public function getBaños()
        {
            return $this->baños;
        }

        public function setBaños($baños)
        {
            $this->baños = $baños;
        }

        public function getEstacionamientos()
        {
            return $this->estacionamientos;
        }

        public function setEstacionamientos($estacionamientos)
        {
            $this->estacionamientos = $estacionamientos;
        }

        public function getEstatus()
        {
            return $this->estatus;
        }

        public function setEstatus($estatus)
        {
            $this->estatus = $estatus;
        }

        public function getCiudad()
        {
            return $this->ciudad;
        }

        public function setCiudad($ciudad)
        {
            $this->ciudad = $ciudad;
        }

         public function getEstado()
        {
            return $this->estado;
        }

        public function setEstado($estado)
        {
            $this->estado = $estado;
        }

         public function getCodigo_postal()
        {
            return $this->codigo_postal;
        }

        public function setCodigo_postal($codigo_postal)
        {
            $this->codigo_postal = $codigo_postal;
        }

         public function getArea_terreno()
        {
            return $this->area_terreno;
        }

        public function setArea_terreno($area_terreno)
        {
            $this->area_terreno = $area_terreno;
        }

          public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

          public function getLatitud()
        {
            return $this->latitud;
        }

        public function setLatitud($latitud)
        {
            $this->latitud = $latitud;
        }

          public function getLongitud()
        {
            return $this->longitud;
        }

        public function setLongitud($longitud)
        {
            $this->longitud = $longitud;
        }

          public function getExterior()
        {
            return $this->exterior;
        }

        public function setExterior($exterior)
        {
            $this->exterior = $exterior;
        }

          public function getInterior_1()
        {
            return $this->interior_1;
        }

        public function setInterior_1($interior_1)
        {
            $this->interior_1 = $interior_1;
        }

           public function getInterior_2()
        {
            return $this->interior_2;
        }

        public function setInterior_2($interior_2)
        {
            $this->interior_2 = $interior_2;
        }
    }
}
