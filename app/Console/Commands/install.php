<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'DB and admin install process';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if(!Schema::hasTable('rol')) {
            Schema::create('rol', function (Blueprint $table) {
                $table->increments('id');
                $table->string('rol_name');
                //$table->timestamps();
            });
        }

        if(!Schema::hasTable('users_f')) {
            Schema::create('users_f', function (Blueprint $table) {
                $table->integer('id');
                $table->string('email');
                $table->integer('phone');
                $table->string('name');
                $table->string('surname');
                $table->string('pass');
                $table->integer('rol')->unsigned();
                //$table->timestamps();
                $table->primary(['id', 'email']);
                $table->foreign('rol')->references('id')->on('rol');
            });
        }

        if (Schema::hasTable('messengers')) {
            Schema::create('messengers', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('phone');
                $table->string('name');
                $table->string('surname');
                $table->json('messenger_info')->nullable(true);
                $table->string('pass');
                $table->integer('rol')->unsigned();
                //$table->timestamps();
                $table->primary(['id', 'email']);
                $table->foreign('rol')->references('id')->on('rol');
            });
        }

        if(!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->integer('id');
                $table->integer('id_user')->unsigned();
                $table->integer('id_messenger')->unsigned();
                $table->string('description');
                $table->string('address');
                $table->string('state');
                $table->timestamps();
                $table->primary('id');
            });

            Schema::create('orders', function(Blueprint $table) {
                $table->foreign('id_user')->references('id')->on('users_f');
                $table->foreign('id_messenger')->references('id')->on('messengers');
            });
        }

        $roles = [
            ['rol_name' => 'admin'],
            ['rol_name' => 'messenger'],
            ['rol_name' => 'client']
          ];
          foreach($roles as $rol) {
              DB::table('rol')->insertGetId($rol);
          }
    }
}
