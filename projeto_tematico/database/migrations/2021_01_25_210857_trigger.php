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
        pr INTEGER = (select id_produtos from embalagem where id=new.embalagemid);
        se INTEGER = (select stock_existente from produtos p where p.id = pr);
        sm Integer = (select stock_minimo from produtos p where p.id = pr);
        begin	
                UPDATE produtos set stock_existente = stock_existente-1 where id = pr;
                IF se-1<sm THEN
                INSERT INTO alerta_stock (id_produto)
                VALUES (pr);		
                END if;
            
        return null;
        end;
            
        $$
        LANGUAGE plpgsql');

        DB::unprepared('create or replace function alerta_stock_entrada()
        RETURNS trigger AS $$
        declare 
		pr INTEGER = (select id_produtos from embalagem where id=new.embalagemid);
        se INTEGER = (select distinct(stock_existente) from produtos p where p.id = pr);
        sm Integer = (select distinct(stock_minimo) from produtos p where p.id = pr);
        begin	
                UPDATE produtos set stock_existente = stock_existente+1 where id = pr;
                IF se+1>sm THEN
                delete from alerta_stock where produto_id = pr;		
                END if;
            
        return null;
        end;
            
        $$
        LANGUAGE plpgsql');


        DB::unprepared("Create Trigger stock_saida after insert on registo_saidas for each row  execute procedure alerta_stock_saida()");
        DB::unprepared("Create Trigger stock_entrada after insert on movimentos for each row  execute procedure alerta_stock_entrada()");
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
