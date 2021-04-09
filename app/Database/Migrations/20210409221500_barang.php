<?php namespace app\Database\Migration;

class Barang extends \CodeIgniter\Database\Migration{

    public function up(){
        $this->forge->addField ( [
            'id'=> [
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_incrument'=>TRUE
            ],
            'barang'=>[
                'type'=>'TEXT',
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
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
        $this->forge->createTable('barang');
    }
    public function down (){
        $this->forge->dropTable('barang');
    }
}
?>