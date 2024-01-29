<?php


use App\Models\Registro;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;
use App\Filament\Resources\RegistroResource;

class PruebaRegistros extends TestCase
{
    public function testRegistro()
    {
        $resource = new RegistroResource();

        $this->assertInstanceOf(RegistroResource::class, $resource);
    }    // Otras pruebas para métodos y propiedades específicos del recurso
}


 
