<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER `delete_total_kas` BEFORE DELETE ON `anggotas`
             FOR EACH ROW BEGIN 
            DECLARE tagihan int ;
            DECLARE kategori varchar(50) ;

            DELETE from total_iuran_kas where id_anggota = OLD.id;
            DELETE FROM iuran_kas where id_anggota = OLD.id;

            END
        ');

        DB::unprepared("
            CREATE TRIGGER `tambah_tagihan_kas_anggota` AFTER INSERT ON `anggotas`
             FOR EACH ROW BEGIN 
            DECLARE tagihan int ;
            DECLARE kategori varchar(50) ;

            IF(NEW.pekerjaan IN (1)) THEN 
                SET kategori = 'Pelajar';
            ELSE 
                SET kategori = 'Pekerja';
            END IF;

            IF(kategori = 'Pelajar') THEN 
                SELECT nama into tagihan from m_parameter where type = 'iuran_kas_pelajar' AND tahun = YEAR(CURDATE());
            ELSE 
                SELECT nama into tagihan from m_parameter where type = 'iuran_kas_pekerja' AND tahun = YEAR(CURDATE());
            END IF;

            IF(tagihan IS NOT NULL) THEN
            INSERT INTO total_iuran_kas(id_anggota,nominal,tagihan,tahun) VALUES(NEW.id, 0,tagihan, YEAR(CURDATE()));
            END IF;

            END
        ");

        DB::unprepared("
            CREATE TRIGGER `uuid` BEFORE INSERT ON `anggotas`
             FOR EACH ROW BEGIN 
            IF new.uuid IS NULL THEN
                SET new.uuid = uuid();
              END IF;
            END
        ");

        DB::unprepared("
            CREATE TRIGGER `kurang_iuran_kas` AFTER DELETE ON `iuran_kas`
                 FOR EACH ROW BEGIN 
                DECLARE total_lama int ;

                SELECT nominal into total_lama from total_iuran_kas where id_anggota = OLD.id_anggota; 

                UPDATE total_iuran_kas set nominal = (total_lama - OLD.nominal) where id_anggota = OLD.id_anggota AND tahun = OLD.tahun; 

                END;
        ");

        DB::unprepared("
            CREATE TRIGGER `kurang_iuran_kas2` AFTER UPDATE ON `iuran_kas`
             FOR EACH ROW BEGIN 
            DECLARE total_lama int ;

            SELECT SUM(nominal) into total_lama from total_iuran_kas where id_anggota = NEW.id_anggota; 

            IF(NEW.deleted = 1) THEN 
                UPDATE total_iuran_kas set nominal = (total_lama - NEW.nominal) where id_anggota = NEW.id_anggota AND tahun = NEW.tahun; 
            ELSE 
                UPDATE total_iuran_kas set nominal = ((total_lama - OLD.nominal) + NEW.nominal) where id_anggota = NEW.id_anggota AND tahun = NEW.tahun; 
            END IF;
            END;
          ");

          DB::unprepared("
            CREATE TRIGGER `tambah_iuran_kas` AFTER INSERT ON `iuran_kas`
             FOR EACH ROW BEGIN 
            DECLARE total_lama int ;
            DECLARE ada int;

            SELECT nominal into total_lama from total_iuran_kas where id_anggota = NEW.id_anggota and tahun = NEW.tahun; 

            SELECT count(*) INTO ada FROM total_iuran_kas where id_anggota = NEW.id_anggota AND tahun = NEW.tahun;

            IF(ada <> 0) THEN 
              UPDATE total_iuran_kas set nominal = (total_lama + NEW.nominal) where id_anggota = NEW.id_anggota     AND tahun = NEW.tahun; 
            ELSE 
              INSERT INTO total_iuran_kas (id_anggota,nominal,tahun) VALUES (NEW.id_anggota, NEW.nominal, NEW.tahun); 
            END IF;
            END
          ");


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::unprepared('DROP TRIGGER `delete_total_kas`');
         DB::unprepared('DROP TRIGGER `tambah_tagihan_kas_anggota`');
         DB::unprepared('DROP TRIGGER `uuid`');
         DB::unprepared('DROP TRIGGER `kurang_iuran_kas` ');
         DB::unprepared('DROP TRIGGER `kurang_iuran_kas2` ');
         DB::unprepared('DROP TRIGGER `tambah_iuran_kas` ');
    }
}
