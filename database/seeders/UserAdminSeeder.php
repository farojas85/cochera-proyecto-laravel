<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\TipoDocumento;
use App\Models\Persona;
use App\Models\Role;
use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoDocumento = TipoDocumento::select('id')->where('nombre_corto','D.N.I/L.E.')->first();

        $persona = Persona::firstOrCreate([
            'tipo_documento_id' => $tipoDocumento->id,
            'numero_documento' => '10000001',
            'nombres' => 'ADMIN',
            'apellidos' => 'SISTEMA',
            'sexo' => 'M'
        ]);

        $role = Role::select('id')->where('directriz','super-usuario')->first();

        $user = User::firstOrCreate([
            'persona_id' => $persona->id,
            'name' => 'admin',
            'email' => 'admin@me.com',
            'password' => Hash::make('123456789'),
            'role_id' => $role->id
        ]);
    }
}
