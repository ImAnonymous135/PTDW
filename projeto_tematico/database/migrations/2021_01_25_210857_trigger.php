<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('create or replace function alerta_stock_saida()
        RETURNS trigger AS $$
        declare 
        se INTEGER = (select stock_existente from produtos where id = new.id_produto);
        sm Integer = (select stock_minimo from produtos where id = new.id_produto);
        begin	
                UPDATE produtos set stock_existente = stock_existente-1 where id = new.id_produto;
                IF se-1<sm THEN
                INSERT INTO alerta_stock (produto_id)
                VALUES (new.id_produto);		
                END if;
            
        return null;
        end;
            
        $$
        LANGUAGE plpgsql');

        DB::unprepared('create or replace function alerta_stock_entrada()
        RETURNS trigger AS $$
        declare 
        se INTEGER = (select stock_existente from produtos p where id = new.id_produto);
        sm Integer = (select stock_minimo from produtos where id = new.id_produto);
        begin	
                UPDATE produtos set stock_existente = stock_existente+1 where id = new.id_produto;
                IF se+1>sm THEN
                delete from alerta_stock where produto_id = new.id_produto;		
                END if;
            
        return null;
        end;
            
        $$
        LANGUAGE plpgsql');


        DB::unprepared("Create Trigger stock_saida after insert on registo_saidas for each row  execute procedure alerta_stock_saida()");
        DB::unprepared("Create Trigger stock_entrada after insert on movimentos_produtos_quimicos for each row  execute procedure alerta_stock_entrada()");
        DB::unprepared("Create Trigger stock_entrada after insert on movimentos_produtos_nao_quimicos for each row  execute procedure alerta_stock_entrada()");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
