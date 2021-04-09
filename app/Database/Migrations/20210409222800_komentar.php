<?php namespace app\Database\Migration;

class Komentar extends \CodeIgniter\Database\Migration {

    public function up(){
        $this->forge->addField ( [
            'id'=> [
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_incrument'=>TRUE
            ],
            'id_barang'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            ],
            'id_user'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            ],
            'komentar'=>[
                'type'=>'TEXT',
            ],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>11,
                'null'=>TRUE,
            ],
            'updated_date'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignkey('id_user','user','id');
        $this->forge->addForeignkey('id_barang','barang','id');
        $this->forge->createTable('komentar');
    }
    public function down (){
        $this->forge->dropTable('komentar');
    }
}
?>