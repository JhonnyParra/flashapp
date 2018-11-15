<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Schema;

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
        if(!Schema::hasTable('table')) {
            Schema::create('users', function (Blueprint $table) {
                $table->integer('id');
                $table->string('email');
                $table->integer('phone');
                $table->string('name');
                $table->string('surname');
                $table->string('pass');
                $table->integer('rol');
                $table->json('messenger_info');
                $table->timestamps();
            });
        }
    }
}
