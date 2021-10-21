<?php
class Users extends Stalker_Table
{
    public function schema() {
        return Stalker_Schema::build( function ($table) {
            $table->int("id", 11);
            $table->varchar("first_name", 40);
            $table->varchar("surname", 40);            
            $table->varchar ("mobile",12)->nullable()->def(Null);
            $table->varchar ("email",40);
            $table->varchar ("password",40);
            $table->varchar ("Date_of_birth",40);
            $table->varchar ("gender",40);
            $table->id("id")->primary();
            $table->email("email")->unique();
        });
    }
       
}
?>